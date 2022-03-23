<?php

namespace App\Services\Client;


class ServiceAPI
{
    /**
     * This service is responsible for building the client for the api you want to call
     * RickAndMorty or any other service in the future
    */    
    const Services = ['RickAndMorty' => 'https://rickandmortyapi.com/api', 'OtherServices' => 'https://otherservice.com/api'];
    private $url;

    public function __construct($service)
    {

        if (array_key_exists($service, self::Services)) {
            $this->url = self::Services[$service];
        }
    }

    public function getUrl():string {
        return $this->url;
    }

}
