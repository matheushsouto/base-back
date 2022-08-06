<?php

namespace Modules\Base\Services;

use Illuminate\Support\Facades\Log;

class CurlService
{

    /**
     * Make an http request using curl.
     *
     * @param string $route
     * @param string $method
     * @param array $header
     * @param array $body
     *
     * @return array
     */
    private static function curl($route, $method, $header = [], $body = [])
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $route,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT_MS => 300000,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_VERBOSE => true,
            CURLOPT_CUSTOMREQUEST => $method,
        ));
        $response = json_decode(curl_exec($curl), true);
        $code = curl_getinfo($curl)['http_code'];

        dd(  $response);
        curl_close($curl);
        return [
            'response' => $response,
            'code' => $code
        ];
    }


     /**
     * Make an http request using curl.
     *
     * @param string $route
     * @param string $method
     * @param array $header
     * @param array $body
     *
     * @return array
     */
    private static function curlWithoutDecode($route, $method, $header = [], $body = [])
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $route,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT_MS => 300000,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_VERBOSE => true,
            CURLOPT_CUSTOMREQUEST => $method,
        ));
        $response = utf8_encode(curl_exec($curl));
        $code = curl_getinfo($curl)['http_code'];

        curl_close($curl);
        return [
            'response' => $response,
            'code' => $code
        ];
    }


    /**
     * make a get request using curl.
     *
     * @param string $route
     *
     * @return array
     */
    public static function get($route)
    {
        return self::curl($route, 'GET');
    }

    /**
     * make a get request using curl.
     *
     * @param string $route
     *
     * @return array
     */
    public static function getWithoutDecode($route)
    {
        return self::curlWithoutDecode($route, 'GET');
    }

    /**
     * make a put request using curl.
     *
     * @param string $route
     *
     * @return array
     */
    public static function put($route, $body = [], $header = [])
    {
        return self::curl($route, 'PUT', $header, $body);
    }

    /**
     * make a post request using curl.
     *
     * @param string $route
     *
     * @return array
     */
    public static function post($route, $body = [], $header = [])
    {
        return self::curl($route, 'POST', $header, $body);
    }
}
