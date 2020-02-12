<?php

namespace cotoflux\site_test\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Controller as BaseController;




class returnBearerController extends BaseController
{
    public function check()
    {
        $response = Storage::get('hdllToken');
        return $response;
    }
}

