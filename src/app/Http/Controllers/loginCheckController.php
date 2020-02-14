<?php

namespace cotoflux\site_test\Controllers;

use cotoflux\site_test\SiteAPIClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Controller as BaseController;




class loginCheckController extends BaseController
{
    public function logincheck()
    {
        $expected = new SiteAPIClient();
        $expectedToken = $expected->obtain_access_token();
        $expectedUser = $expected->obtainUser();
        $expectedPassword = $expected->obtainPassword();

        if ($expectedToken && $expectedUser && $expectedPassword){
            return "true";
        } else {
            return "false";
        }
    }
}

