<?php

namespace Chocofamily\Laravel\SmartHttp\Providers;

use Chocofamily\Laravel\SmartHttp\Client;
use Chocofamily\Laravel\SmartHttp\Facades\SmartClient;
use Chocofamily\Laravel\SmartHttp\Facades\SmartRequest;
use Chocofamily\Laravel\SmartHttp\Http\Request;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;

/**
 * @package Chocolife.me
 * @author  Moldabayev Vadim <moldabayev.v@chocolife.kz>
 */
class SmartHttpServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Merge our config with application config
        $this->mergeConfigFrom(
            __DIR__.'/../../config/smart-http.php', 'smart-http'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     * @throws BindingResolutionException
     */
    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__.'/../../config/smarthttp.php' => config_path('smarthttp.php'),
        ]);

        $this->app->bind(Client::class,
            function () {
                return new Client(config('smarthttp', []), $this->app->get('cache'));
            }
        );

        $this->app->bind(Request::class,
            function () {
                return new Request(config('smarthttp', []), $this->app->get('cache'));
            }
        );

        $this->app->alias('SmartClient', SmartClient::class);
        $this->app->alias('SmartRequest', SmartRequest::class);
    }
}
