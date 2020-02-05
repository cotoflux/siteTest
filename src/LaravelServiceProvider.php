<?php
namespace cotoflux\site_test;

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
            __DIR__ . '/app/Console/Commands/TestAllTrue.php' => app_path('Console/Commands/TestAllTrue.php'),
            __DIR__ . '/app/Console/Commands/TestConfig.php' => app_path('Console/Commands/TestConfig.php'),
            __DIR__ . '/app/Console/Commands/TestAllTrue.php' => app_path('Console/Commands/TestLoginValidToken.php'),
        ]);

    }
}
