<?php

namespace App\Services;

use App\Interfaces\HttpClientInterface;

class RestaurantService
{
//    private HttpClient $httpClient;
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getRestaurant(){
        return $this->httpClient->get('https://run.mocky.io/v3/0d6aab31-bb68-4d89-acc5-bc4148a3cff3');
    }
}
