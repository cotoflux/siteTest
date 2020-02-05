<?php
namespace cotoflux\api_work;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

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
        /*
        * Publish the all thecommands to use when installed
        */
        $this->publishes([
            __DIR__ . '/app/Console/Commands/TestAllTrue.php' => config_path('TestAllTrue.php'),
            __DIR__ . '/app/Console/Commands/TestConfig.php' => config_path('TestConfig.php'),
            __DIR__ . '/app/Console/Commands/TestAllTrue.php' => config_path('TestAllTrue.php'),
        ]);

    }
}
