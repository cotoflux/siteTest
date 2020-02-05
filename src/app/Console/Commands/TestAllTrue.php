<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
Use cotoflux\api_work\MyAppsCheckWithAPI;

class TestAllTrue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:alltrue';

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
    $client = new MyAppsCheckWithAPI();
    $myVariable = $client->redirect_to_aplication();

    if($myVariable == "true"){
        echo "true";
    }else{
        echo "Hay algun error";
    }

     
    }
}