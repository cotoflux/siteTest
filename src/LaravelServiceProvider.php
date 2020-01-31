<?php
namespace cotoflux\api_work;

use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap application services.
     *<
     * @return void
     */
    public function boot()
    {
        /*
        * Publish the sips.php config file
        */
        $this->publishes([
            __DIR__ . 'LaravelServiceProvider.php' => config_path('LaravelServiceProvider.php'),
        ]);
    }
}
