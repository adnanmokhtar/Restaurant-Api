<?php

namespace App\Services;

use App\Interfaces\HttpClientInterface;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class GuzzleWrapperService implements HttpClientInterface
{
//    private Client $client;
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function get(string $uri, array $options = []): ResponseInterface
    {
        return $this->client->get($uri, $options);
    }

    public function post(string $uri, array $options = []): ResponseInterface
    {
        return $this->client->post($uri, $options);
    }
}
