<?php
declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;

Class MyAppsActivityLogin
{

  
    public function __construct()
    {
        $this->myPassword='test1234';
        $this->myUser="test@test.test";

    }

    public function get_userLoginApp(){
        return $this->myUser;
    }
    public function get_passwordLoginApp(){
        return $this->myPassword;
    }

    public function get_tokenLoginApp(){
        $token = new TokenGeneratorMyApp();
        return $token;
    }


}