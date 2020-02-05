<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestConfig extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:config {config}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test config file';

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
        $this->info($this->argument('config'));
        dd(config($this->argument('config')));
    }
}
