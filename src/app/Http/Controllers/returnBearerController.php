<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

class returnBearerController extends Controller
{
    public function check()
    {
        $response = Storage::get('hdllToken');
        return $response;
    }

    protected function loadRoutesFrom($path)
    {
        if (! $this->app->routesAreCached()) {
            require $path;
        }
    }    
    

}
