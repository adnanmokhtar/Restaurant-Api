<?php

namespace App\Providers;

use App\Interfaces\HttpClientInterface;
use App\Services\GuzzleWrapperService;
use Illuminate\Support\ServiceProvider;

class GuzzleServiceProvider extends ServiceProvider
{
//    public array $bindings = [
//        HttpClient::class => GuzzleWrapper::class
//    ];

    public $bindings = [
        HttpClientInterface::class => GuzzleWrapperService::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
