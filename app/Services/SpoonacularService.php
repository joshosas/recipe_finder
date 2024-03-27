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

    public function searchRecipes()
    {
        $response = $this->client->request('GET', '/recipes/complexSearch', [
            'query' => [
                'apiKey' => $this->apiKey,
                'cusine' => 'italian'
            ],
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getRecipeById($id)
    {
        $response = $this->client->request('GET', "/recipes/{$id}", [
            'query' => [
                'apiKey' => $this->apiKey,
            ],
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
