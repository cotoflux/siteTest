<?php
namespace cotoflux\site_test;

use Illuminate\Support\ServiceProvider;


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
            __DIR__ . '/app/Console/Commands/TestAllTrue.php' => app_path('\Console\Commands\TestAllTrue.php'),

            __DIR__ . '/app/Console/Commands/TestConfig.php' => app_path('\Console\Commands\TestConfig.php'),

            __DIR__ . '/app/Console/Commands/TestLoginValidToken.php' => app_path('\Console\Commands\TestLoginValidToken.php'),

            __DIR__ . '/app/Console/Commands/TestHdllToken.php' => app_path('\Console\Commands\TestHdllToken.php'),

            __DIR__ . '/app/Console/Commands/TestKeyPassword.php' => app_path('\Console\Commands\TestKeyPassword.php'),

            __DIR__ . '/app/Console/Commands/TestKeyUser.php' => app_path('\Console\Commands\TestKeyUser.php'),

        ]);

        $this->publishes([
            __DIR__ . '/app/Http/Controllers/originKeyController.php' => app_path('\Http\Controllers\originKeyController.php'),

            __DIR__ . '/app/Http/Controllers/returnBearerController.php' => app_path('\Http\Controllers\returnBearerController.php'),

        ]);

        $this->publishes([

            $this->loadRoutesFrom(__DIR__.'\routes\routes.php'),
        ]);

    }
}
