<?php

namespace Modules\Base\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;

class FirebaseMessagingService
{
    const API_FIREBASE = "https://fcm.googleapis.com/fcm/send";

    /**
     * Send push notification.
     *
     * @param $clientId
     * @param $userId
     * @return array
     */
    static function sendPushNotification($userId, $body, $title)
    {
        $apiKey = Config::get("constants.FIREBASE_CLOUD_KEY");

        $body = array(
            'to'              => "/topics/" . $userId,
            'collapse_key'    => "new_message",
            'notification'    =>
                array(
                'title' => $title,
                'body'  => $body,
                ),
        );

        $header = array(
            "Authorization:" . $apiKey,
            "Content-Type: application/json;charset=UTF-8",
        );

        $response = CurlService::post(self::API_FIREBASE, json_encode($body), $header);

        return $response['response'];
    }

    static function sendPushNotificationAll($title, $body) {
        $apiKey = Config::get("constants.FIREBASE_CLOUD_KEY");

        $body = array(
            'to' => "/topics/global",
            'notification' => array(
                'title' => $title,
                'body'  => $body,
            ),
        );

        $header = array(
            "Authorization:" . $apiKey,
            "Content-Type: application/json;charset=UTF-8",
        );

        $response = CurlService::post(self::API_FIREBASE, json_encode($body), $header);

        return $response['response'];
    }
}
