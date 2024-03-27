<?php

namespace App\Services;

use GuzzleHttp\Client;

class HumorService
{
    protected $client;
    protected $apikey;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.humorapi.com'
        ]);

        $this->apikey = config('services.humor.api_key');
    }

    public function searchJokes()
    {
        $response = $this->client->request('GET', '/jokes/search', [
            'query' => [
                'api-key' => $this->apikey,
                'number' => 10
            ],
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
