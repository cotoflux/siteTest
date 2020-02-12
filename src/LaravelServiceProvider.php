<?php
namespace cotoflux\site_test;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class LaravelServiceProvider extends ServiceProvider
{


    public function boot()
    {
        /*
        * Publish the apiwork.php config file
        */
        $this->publishes([
            __DIR__ . '/config/apiwork.php' => config_path('apiwork.php'),
        ]);


        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');

    }
}
