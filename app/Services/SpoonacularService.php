<?php

namespace App\Services;

use GuzzleHttp\Client;

class SpoonacularService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.spoonacular.com',
        ]);

        $this->apiKey = config('services.spoonacular.api_key');
    }

    public function searchRecipes($query)
    {
        $response = $this->client->request('GET', '/recipes/complexSearch', [
            'query' => [
                'apiKey' => $this->apiKey,
                'query' => $query,
            ],
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
