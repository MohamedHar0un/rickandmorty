<?php

namespace App\Services;


use App\Services\Client\ServiceAPI;
use GuzzleHttp\Client;

class RickAndMortyService extends ServiceAPI
{
/**
    Call Rick and morty external [characters] api to get the data 
 */    
    const SERVICE = 'RickAndMorty';

    public function getCharacters($page=1) {
        $url = $this->getUrl() . "/character?page=$page";
        // initiate the http client        
        $client = new Client(['base_uri' => $url]);
        // make the api request and get response 
        $response = json_decode($client->request('GET')->getBody()->getContents());
        return $response;
    }
}
