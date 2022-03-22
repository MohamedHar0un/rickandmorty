<?php

namespace App\Services;


use App\Services\Client\ServiceAPI;
use GuzzleHttp\Client;

class RickAndMortyService extends ServiceAPI
{
    const SERVICE = 'RickAndMorty';

    public function getCharacters($page=1) {
        $url = $this->getUrl() . "/character?page=$page";
        $client = new Client(['base_uri' => $url]);
        $response = json_decode($client->request('GET')->getBody()->getContents());
        return $response;
    }
}
