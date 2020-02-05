<?php
namespace cotoflux\api_work;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class LaravelServiceProvider extends ServiceProvider
{

/*     
    public function register()
    {
        $baseUrl = env('APIWORK_SITE_ENDPOINT');

        $this->app->singleton('GuzzleHttp\Client', function($api) use ($baseUrl) {
            return new Client([
                'base_uri' => $baseUrl,
            ]);
        });
    } */
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
            __DIR__ . '/config/apiwork.php' => config_path('apiwork.php'),
        ]);
    }
}
