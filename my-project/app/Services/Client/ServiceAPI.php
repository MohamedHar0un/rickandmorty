<?php

namespace App\Services\Client;


class ServiceAPI
{
    const Services = ['RickAndMorty' => 'https://rickandmortyapi.com/api', 'OtherServices' => 'https://otherservice.com/api'];
    private $url;

    public function __construct($service)
    {

        if (array_key_exists($service, self::Services)) {
            $this->url = self::Services[$service];
        }
    }

    public function getUrl() {
        return $this->url;
    }

}
