<?php

namespace Iluminar\VPS\Core;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class Request
{
    const API_BASE_URL = "https://api.digitalocean.com/v2/";

    public static function get($endpoint = null, $params = null)
    {
        $url = self::API_BASE_URL . $endpoint;

        return self::makeRequest('GET', $url, $params);
    }

    public static function post($endpoint, $params = null)
    {
        $url = self::API_BASE_URL . $endpoint;

        return self::makeRequest('POST', $url, $params);
    }

    public static function makeRequest($method, $url, $params)
    {
        $client = new Client();
        $response = $client->request($method, $url, $params);

        return self::parseResponse($response);
    }

    public static function parseResponse($response)
    {
        $array = json_decode((string) $response->getBody(), true);

        return Collection::make($array);
    }

    public static function delete($endpoint, $params = [])
    {
        $url = self::API_BASE_URL . $endpoint;

        return self::makeRequest('DELETE', $url, $params);
    }
}
