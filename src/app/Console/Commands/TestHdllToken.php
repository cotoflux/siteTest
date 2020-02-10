<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use cotoflux\site_test\SiteAPIClient;
Use cotoflux\site_test\MyAppsCheckWithAPI;

class TestHdllToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:maketokenavailable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Makes the token available to work';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $response = new SiteAPIClient();
        $realResponse = $response->sendResponseToCoreApi();
        dd($realResponse);
        //return $realResponse;
    }
}