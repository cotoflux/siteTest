<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
Use cotoflux\api_work\SiteAPIClient;

class TestLoginValidToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:loginvalidtoken';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test for the apiwork';

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
    $client = new SiteAPIClient();
    $myVariable = $client->sendResponseToCoreApi();

    if($myVariable === "true"){
        echo "true";
    }else{
        echo "Hay algun error";
    }

     
    }
}
