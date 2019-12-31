<?php

namespace Chocofamily\Laravel\SmartHttp\Providers;

use Chocofamily\Laravel\SmartHttp\Client;
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

        $this->app->make(Client::class, [
            config('smarthttp', []),
            $this->app->get('cache'),
        ]);

        $this->app->make(Request::class, [
            config('smarthttp', []),
            $this->app->get('cache'),
        ]);

        $this->app->alias('SmartHttpClient', Client::class);
        $this->app->alias('SmartHttpRequest', Request::class);
    }
}
