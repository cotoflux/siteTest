<?php
declare(strict_types=1);

namespace cotoflux\api_work;

use cotoflux\api_work\AccesoUser;
use cotoflux\api_work\AccesoPassword;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;

Class MyAppsActivityLogin
{

  
    public function __construct()
    {
        $this->myPassword= $this->get_passwordLoginApp();
        $this->myUser= $this->get_userLoginApp();
        $this->token= $this->get_tokenLoginApp();

    }

    public function get_userLoginApp(){
        $myUser = new AccesoUser();
        return $myUser;
    }
    public function get_passwordLoginApp(){
        $myPassword = new AccesoPassword();
        return $myPassword;
    }

    public function get_tokenLoginApp(){
        $token = new MyAppTokenGenerator();
        return $token;
    }


}