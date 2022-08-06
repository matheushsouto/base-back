<?php

namespace Modules\Partner\Services;

use Carbon\Carbon;
use Modules\Auth\Models\User;
use Modules\Base\Services\ApiNodeService;
use Modules\Base\Services\Utils;
use Modules\Called\Models\Called;
use Modules\Called\Models\CalledStatus;
use Modules\Called\Models\Customer;
use Modules\Called\Models\Group;
use Modules\Called\Models\Message;
use Modules\Called\Models\MessageType;
use Modules\Partner\Models\Client;

class ClientService
{
    /**
     * Return the phone state according to the response of API
     */
    static public function getPhoneStateFromNode(int $clientId, string $state): string {
        $state = $state ?? ApiNodeService::statePhone($clientId);
        switch ($state) {
            case 'CONNECTED':
                return 'Ativo';
                break;
            case 'TIMEOUT':
            case 'CONFLICT':
                return 'Desconectado';
                break;
            case 'PAIRING':
            case 'OPENING':
                return 'Conectando-se';
                break;
            case 'UNPAIRED':
            case 'UNPAIRED_IDLE':
            case '':
                return 'Não pareado';
                break;
            case 'PROXYBLOCK':
                return 'Bloqueado';
                break;
            default:
                return $state;
                break;
        }
    }

    /**
     * Register the phone disconnection
     * @param Client client
     */
    static public function clientDisconnection(Client $client): void
    {
        if($client->connected_whatsapp) {
            $client->last_connection = Carbon::parse($client->connected_whatsapp)->subMinutes(5)->format('Y-m-d H:i:s');
        }
        $client->phone_status = 'Desconectado';
        $client->connected_whatsapp = null;
        $client->update();
        return;
    }

    /**
     * Register the phone connection
     * @param Client client
     */
    static public function clientConnection(Client $client): void
    {
        if($client->last_connection != null) {
            ClientService::recoverMessages($client);
        }
        $client->phone_status = 'Ativo';
        $client->last_connection = null;
        $client->connected_whatsapp = Utils::getCurrentDate();
        $client->update();
        return;
    }

    /**
     * Handle the change state of phone
     * @param int client_id
     * @param string state
     */
    static public function onPhoneStateChange(int $client_id, string $state = null): void
    {
        $client = Client::find($client_id);
        if(!$client) {
            throw new \Exception('Client not found.');
        }
        $state = ClientService::getPhoneStateFromNode($client->id, $state);
        
        if(in_array($state,['Desconectado','Conectando-se','Não pareado','Bloqueado','']) || !$state) {
            ClientService::clientDisconnection($client);
            return;
        }
        ClientService::clientConnection($client);
    }

    /**
     * Recover the messages when the user return from a disconnected time
     */
    public static function recoverMessages(Client $client)
    {
        $clientId = $client->id;
        $user = User::where('client_id')->where('master', true)->first();
        $chats = ApiNodeService::recoverOfflineMessages(Carbon::parse($client->last_connection)->timestamp, $clientId);

        if (!count((array)$chats)) {
            return;
        }

        foreach ($chats as $key => $chat) {
            $phone =  str_replace(['@g.us','@c.us'], '',  $key);

            if ($chat['isGroup']) {
                $called = Called::ofCalledByGroup($key, $clientId)->first();
            } else {
                $called = Called::ofCalledOpenByPhone($phone, $clientId)->first();
                $customer = Customer::ofClientAndPhone($clientId, $phone)->first();
            }

            foreach ($chat['messages'] as $message) {

                // verifica se a mensagem que está sendo recuperada já existe no sistema
                $messageExists = Message::where('whats_id', $message['id']['id'])->first();
                if ($messageExists) {
                    if(!$messageExists->message_sent){
                        $messageExists->message_sent = date('Y-m-d H:i:s');
                        $messageExists->save();
                    }
                    continue;
                }

                // no caso de grupos ele vai precisar buscar os customers sempre pois pode ter varios
                if ($chat['isGroup'] && !$message['fromMe']) {
                    $phoneCustomer = str_replace('@c.us', '', $message['from']);
                    $customer = Customer::ofClientAndPhone($clientId, $phoneCustomer)->first();
                }

                // cria novo customer se nao existir
                if (!$customer) {
                    $newCustomer = [
                        'name'        => null,
                        'name_whats'  => $chat['isGroup'] ? $chat['name'] : null,
                        'client_id'   => $clientId,
                        'phone'       => $chat['isGroup'] ? $phoneCustomer : $phone,
                        'color'       => Utils::randomColor()
                    ];
                    $customer = Customer::create($newCustomer);
                }

                // cria novo called se nao existir
                if (!$called) {
                    if ($chat['isGroup']) {
                        $newGroup = [
                            'name'        => $chat['name'],
                            'description' => null,
                            'image'       => null,
                            'whats_id'    => $key
                        ];
                        $group = Group::create($newGroup);
                    }

                    $newCalled = [
                        'protocol'         => date("YmdHis") . rand(1000, 99999),
                        'customer_id'      => $chat['isGroup'] ? null : $customer->id,
                        'client_id'        => $clientId,
                        'status_id'        => $chat['isGroup'] ? CalledStatus::CUSTOMER_WAITING : CalledStatus::CLOSED,
                        'node_date'        => Utils::addHoursDateNode($phone),
                        'group_id'         => $chat['isGroup'] ? $group->id : null,
                    ];
                    $called = Called::create($newCalled);
                }

                // salva mensagem recuperada
                $dateMessage = date('Y-m-d H:i:s', $message['timestamp']);
                if ($message['type'] !== MessageType::CHAT_VALUE) {
                    $message['body'] = 'Anexo Detectado, por favor verifique o celular!';
                }
                $newMessage = [
                    'message'        => $message['body'],
                    'called_id'      => $called->id,
                    'type_id'        => MessageType::CHAT,
                    'whats_id'       => $message['id']['id'],
                    'created_at'     => $dateMessage,
                    'user_id'        => $message['fromMe'] ? $user->id : null,
                    'received_at'    => $message['ack'] == MessageType::RECEIVED ? Utils::getCurrentDate() : null,
                    'visualized_at'  => $message['ack'] == MessageType::RECEIVED_AND_READ ? Utils::getCurrentDate() : null
                ];
                Message::create($newMessage);
            }
        }
    }
}
