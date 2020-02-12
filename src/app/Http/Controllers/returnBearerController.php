<?php

namespace cotoflux\site_test\Controllers;

use cotoflux\site_test\SiteAPIClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Controller as BaseController;




class returnBearerController extends BaseController
{
    public function check()
    {
        $sendResponse = new SiteAPIClient();
        $response = $sendResponse->obtain_access_token();

        if($response){
            return $response;
        }else{
            return "false";
        }
    }
}

