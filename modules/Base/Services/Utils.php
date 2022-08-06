<?php

namespace Modules\Base\Services;

use Exception;
use Illuminate\Support\Facades\Log;
use Modules\Called\Models\Message;
use Modules\Called\Models\MessageType;

class Utils
{

    /**
     * Search custom month of the year.
     *
     * @param int $month
     * @param string $day
     * @param string $format
     *
     * @return string
     */
    static function getMonth($month = 0, $day = 'first', $format = "Y-m-d")
    {
        return date($format, strtotime("$day day of $month month"));
    }

    /**
     * Search custom month of the year.
     *
     * @param string $format
     *
     * @return string
     */
    static function getCurrentDate($format = "Y-m-d H:i:s")
    {
        return date($format, time());
    }

    /**
     * Search custom month of the year.
     *
     * @param $hours
     * @param $date
     *
     * @return string
     */
    static function addHoursCurrentDate($hours, $date = null)
    {
        if (!$date){
            $date = date('Y-m-d H:i:s');
        }

        return date('Y-m-d H:i:s', strtotime("+ $hours hours", strtotime($date)));
    }

    /**
     * Add minutes to date
     *
     * @param $minutes
     * @param $date
     *
     * @return string
     */
    static function addMinutesCurrentDate($minutes, $date = null)
    {
        if(!$date) {
            $date = date('Y-m-d H:i:s');
        }

        return date('Y-m-d H:i:s', strtotime("+ $minutes minutes", strtotime($date)));
    }


      /**
     * Remove minutes to date
     *
     * @param $minutes
     * @param $date
     *
     * @return string
     */
    static function removeMinutesCurrentDate($minutes, $date = null)
    {
        if(!$date) {
            $date = date('Y-m-d H:i:s');
        }

        return date('Y-m-d H:i:s', strtotime("- $minutes minutes", strtotime($date)));
    }

    /**
     * Add seconds to date
     *
     * @param $seconds
     * @param $date
     *
     * @return string
     */
    static function addSecondsCurrentDate($seconds, $date = null)
    {
        if(!$date) {
            $date = date('Y-m-d H:i:s');
        }

        return date('Y-m-d H:i:s', strtotime("+ $seconds seconds", strtotime($date)));
    }

    /**
     * Check if its a weekend
     */
    static function isWeekend($date = null) {
        if (!$date){
            $date = date('Y-m-d H:i:s');
        }

        $format = 'd-m';
        $ts = strtotime($date);
        $dm = date($format, $ts);

        //sabado e domingo
        if (in_array(date('w', $ts), [6, 0])) return true;
    }

    /**
     * Check if it's a holiday.
     * @param null $date
     * @return bool
     */
    static function isHoliday($date = null, $ignoreWeekend = false)
    {
        if (!$date){
            $date = date('Y-m-d H:i:s');
        }
        $format = 'd-m';
        $ts = strtotime($date);
        $dm = date($format, $ts);

        //sabado e domingo
        if(!$ignoreWeekend) {
            if (in_array(date('w', $ts), [6, 0])) return true;
        }

        //ano novo, tiradentes, trabalhador, independencia, finados, proclamacao republica, natal
        $fixed_holidays = array('01-01', '21-04', '01-05', '07-09', '12-10', '02-11', '15-11', '25-12');
        if (in_array($dm, $fixed_holidays)) return true;

        $easter = easter_date(date('Y', $ts));
        $dayInSeconds = 86400;

        if (date($format, ($easter - (48 * $dayInSeconds))) == $dm) return true; // 2ª feira carnaval
        if (date($format, ($easter - (47 * $dayInSeconds))) == $dm) return true; // 3ª feira carnaval
        if (date($format, ($easter - (2 * $dayInSeconds))) == $dm) return true; // 6ª feira santa
        if (date($format, $easter) == $dm) return true; // pascoa
        if (date($format, ($easter + (60 * $dayInSeconds))) == $dm) return true; // corpus christ

        return false;
    }

    /**
     * Get day name.
     * @return string
     */
    static function getDayName()
    {
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        return strftime('%A', strtotime('today'));
    }

    /**
    * Convert phone number according to area code
    *
    * @param phone String for the phone number
    * @return string
    */
    static function formatNumberPhone($ddi, $phone): string
    {
        $phoneLen = strlen($phone);

        if ($ddi == '55') {

            $ddd = substr($phone,0,2);
            $mapDdd = ['11', '12', '13', '14', '15', '16', '17', '18', '19', '21', '22', '24', '27', '28'];

            if (in_array($ddd, $mapDdd)) {
                $phone = ($phoneLen == 10 ? $ddd .  '9' . substr($phone, 2) : $phone);
            } else {
                $phone = ($phoneLen == 11 ? $ddd . substr($phone, 3) : $phone);
            }
        }

        if (!str_starts_with($phone, $ddi) || ($phoneLen < 12 && $ddi == '55') ) {
            $phone = $ddi . $phone;
        }

        return $phone;
    }

    /**
     * Convert phone number according to area code
     *
     * @param phone String for the phone number
     * @return string
     */
    static function formatNumberPhoneWithoutDDI($ddi, $phone): string
    {
        if(empty($ddi)){
            $ddi = '55';
        }

        $phoneLen = strlen($phone);

        if ($ddi == '55') {
            $ddi = substr($phone, 0, 2);
            if (str_starts_with($phone, $ddi) && $phoneLen >= 12) {
                $phone = substr($phone, 2, $phoneLen);
            }

            $ddd = substr($phone, 0, 2);
            $mapDdd = ['11', '12', '13', '14', '15', '16', '17', '18', '19', '21', '22', '24', '27', '28'];

            if (in_array($ddd, $mapDdd)) {
                $phone = ($phoneLen == 10 ? $ddd .  '9' . substr($phone, 2) : $phone);
            } else {
                $phone = ($phoneLen == 11 ? $ddd . substr($phone, 3) : $phone);
            }
        }

        return $phone;
    }


    /**
     * Replace String Tag
     */
    static function replaceStringTag($string, $customer) {
        $tagsFormated = '';
        $index = 0;

        foreach ($customer->tags as $tag) {
            if ($index > 0) $tagsFormated = $tagsFormated . ', ';
            $tagsFormated = $tagsFormated . $tag->name;
            $index++;
        }

        $search = ['[nome]', '[tag]', '[cpf]', '[telefone]'];
        $replace = [$customer->name ?? $customer->name_whats, $tagsFormated, $customer->cpf, $customer->phone];

        $newMessage = str_replace($search, $replace, $string);

        return $newMessage;
    }

    /**
     * Add hours date node.
     *
     * @param $hours
     * @param $date
     *
     * @return string
     */
    static function addHoursDateNode($number)
    {
        $date = date('YmdHi');
        return date($date . '' .$number);
    }

    /**
     * Format message on MessageController index
     *
     * @param $message
     */
    static function formatMessage(Message $message, $clientId = null) {
        $isThumbnail = true;

        if (in_array($message->type_id, [MessageType::DOCUMENT, MessageType::CHAT, MessageType::ASK_DOMAIN, MessageType::INTERNAL, MessageType::BOT, MessageType::BOT_RESPONSE_NOT_FOUND, MessageType::ASK_NAME, MessageType::LOCATION])) {
            return $message;
        }

        if ($message->type_id === MessageType::VIDEO) {
            $message->media = null;
            $message->isThumbnail = $isThumbnail;
            $message->clickToDownload = true;
            return $message;
        }

        if (in_array($message->type_id, [MessageType::PTT, MessageType::AUDIO])) {
            $message->media = null;
            $message->isThumbnail = $isThumbnail;
            $message->clickToDownload = false;
            return $message;
        }

        if ($message->type_id === MessageType::VCARD) {
            $names = [];
            $contacts = [];
            $lastIndex = -1;
            foreach(explode(PHP_EOL, $message->message) as $line) {
                $kv = explode(':', $line);

                if (str_contains($kv[0]??'', 'FN')) {
                    array_push($names, $kv[1]);
                    $lastIndex = count($names) - 1;
                }

                if (str_contains($kv[0]??'', 'TEL') && $lastIndex != -1) {
                    array_push($contacts, (object) [
                        'name'  => $names[$lastIndex],
                        'phone' => $kv[1]??''
                    ]);
                    $lastIndex = -1;
                }
            }

            $contactsString = '';
            $count = 0;
            foreach($contacts as $contact) {
                if ($count > 0) $contactsString = $contactsString . PHP_EOL;
                $contactsString = $contactsString . 'Nome: ' . $contact->name . PHP_EOL . 'Numero: ' . $contact->phone . PHP_EOL;
                $count++;
            }
            $message->message = $contactsString;

            return $message;
        }

        if (!$clientId) {
            $clientId = \request()->user()->client_id;
        }

        try {
            if (file_exists("../media/$clientId/thumbs/$message->media")) {
                $file = file_get_contents("../media/$clientId/thumbs/$message->media");
            } else {
                $file = file_get_contents("../media/$clientId/$message->media");
                $isThumbnail = false;
            }
        } catch (Exception $ex) {
            return $message;
        }

        $message->media = base64_encode($file);
        $message->isThumbnail = $isThumbnail;
        $message->clickToDownload = false;

        return $message;
    }

    /**
     * Create random color.
     */
    static function randomColor() {
        $arrayColors = ['DFB615','E69F73','6B77DD','3F3431','D49B73','2947AC','00B33E','BA33DC','91AB01','00B33C',
                        'C69478','B04632','35CD8C','83AB01','6BCBEF','35CD96','6EADEE','9E3C31','DFB610','91A70A',
                        'E68200','6EADF5','8B50AF','3BDEC3','72CC92','FD85D4','2E3131','E69F6E','DF9C22','6DCC92',
                        'E68203','51B2E9','E1C5C6','8B7ADD','B033DC','BD85CD'];

        $random_number = rand(0, count($arrayColors) -1);
        return '#' . $arrayColors[$random_number];
    }

    static function routeNames($name)
    {
        return [
            'index'      => "$name-index",
            'fetchPair'  => "$name-fetchPair",
            'create'     => "$name-create",
            'store'      => "$name-store",
            'show'       => "$name-show",
            'edit'       => "$name-edit",
            'update'     => "$name-update",
            'bulkDelete' => "$name-bulkDelete",
            'destroy'    => "$name-destroy",
            'bulkUpdate' => "$name-bulkUpdate"
        ];
    }


    static function generateHash($length = 22){
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%&?#@*', ceil($length/strlen($x)) )),1,$length);
    }

    static function generateId($length = 6){
        return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
    }

   static function getAllStringBetween($string, $start, $end)
    {
        $result = array();
        $string = " " . $string;
        $offset = 0;
        while (true) {
            $ini = strpos($string, $start, $offset);
            if ($ini == 0)
                break;
            $ini += strlen($start);
            $len = strpos($string, $end, $ini) - $ini;
            $result[] = substr($string, $ini, $len);
            $offset = $ini + $len;
        }
        return $result;
    }
}
