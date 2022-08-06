<?php

namespace Modules\Base\Services;

use Modules\Partner\Models\ClientConfiguration;
use Modules\Partner\Models\Webhook;
use Modules\WebService\Services\WebhookQueueService;

class WebhookService
{
    /**
     * Send webhook message.
     *
     */
    static function sendWebook($data, ClientConfiguration $clientConfiguration)
    {

        if (!$clientConfiguration->web_service_url) {
            return;
        }

        $data['web_service_token'] = $clientConfiguration->web_service_token;
        return CurlService::post($clientConfiguration->web_service_url, json_encode($data));
    }

    static function addToQueue($data, ClientConfiguration $clientConfiguration){
        if (!$clientConfiguration->web_service_url) {
            return;
        }
        
        $webhookData =[
            'event'     => $data['event'],
            'data'      => $data['data'],
            'type'      => $data['type'],
            'client_id' => $clientConfiguration->client_id,
            'url'       => $clientConfiguration->web_service_url,
            'running'   => true
        ];

        $webhook = Webhook::create($webhookData);

        WebhookQueueService::dispatch($webhook, $clientConfiguration);
    }
}
