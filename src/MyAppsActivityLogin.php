<?php
declare(strict_types=1);

namespace cotoflux\api_work;

require('./guarda/myinformation.php');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;

Class MyAppsActivityLogin
{

  
    public function __construct()
    {
        $this->myPassword=MYPASSWORD;
        $this->myUser=MYUSER;
        $this->token= $this->get_tokenLoginApp();

    }

    public function get_userLoginApp(){
        
        return $this->myUser;
    }
    public function get_passwordLoginApp(){
        return $this->myPassword;
    }

    public function get_tokenLoginApp(){
        $token = new MyAppTokenGenerator();
        return $token;
    }


}