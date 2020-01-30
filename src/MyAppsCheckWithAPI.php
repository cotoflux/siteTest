<?php
declare(strict_types=1);

namespace App;

use App\MyAppsActivityLogin;
use App\SiteAPIClient;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;



Class MyAppsCheckWithAPI

{
    public function __construct()
    {

        $this->get_my_api_name();
        $this->get_my_apps_name();
        $this->same_user_name();
        $this->get_my_apps_password();
        $this->get_my_api_password();
        $this->same_user_password(); 
        $this->app_valid_token();
        $this->api_valid_token();
        $this->tokens_are_equal();
    }

    //USER
    public function get_my_apps_name()
    {
        $myAppResponse = new MyAppsActivityLogin();
        $myAppUsername = $myAppResponse->get_userLoginApp();
        return $myAppUsername;
    }

    public function get_my_api_name()
    {
        $myApiResponse = new SiteAPIClient();
        $myApiUsername = $myApiResponse->auth_email;
        return $myApiUsername;
    }

    public function same_user_name()
    {
        $myAppResponse = new MyAppsActivityLogin();
        $myAppUsername = $myAppResponse->get_userLoginApp();


        $myApiResponse = new SiteAPIClient();
        $myApiUsername = $myApiResponse->auth_email;


        if($myAppUsername === $myApiUsername){
            return "true";
        }else{
            return "false";
        }
    }

    //PASSWORD

    public function get_my_apps_password()
    {
        $myAppResponse = new MyAppsActivityLogin();
        $myAppPassword = $myAppResponse->get_passwordLoginApp();
        return $myAppPassword;
    }

   public function get_my_api_password()
    {
        $myApiResponse = new SiteAPIClient();
        $myApiPassword = $myApiResponse->auth_pass;
        return $myApiPassword;
    }
 
    public function same_user_password()
    {
        $myAppResponse = new MyAppsActivityLogin();
        $myAppPassword = $myAppResponse->get_passwordLoginApp();


        $myApiResponse = new SiteAPIClient();
        $myApiPassword = $myApiResponse->auth_pass;


        if($myAppPassword === $myApiPassword){
            return "true";
        }else{
            return "false";
        }

    }

    public function app_valid_token()
    { 
        $myApp_respuesta = new MyAppTokenGenerator();
        $myApp_token = $myApp_respuesta->token;
        $tokenLength = strlen($myApp_token);
      
        if($tokenLength>10){        
            return "true"; 
        }else{
            return "false";
        }
    
    }

    public function api_valid_token()
    { 
        $myApp_respuesta = new SiteAPIClient();
        $myApp_token = $myApp_respuesta->sendResponseToCoreApi();
      
        if($myApp_token == 'true'){        
            return "true"; 
        }else{
            return "false";
        }
    
    }

    public function tokens_are_equal()
    {
        $app_token = $this->app_valid_token();
        $api_token = $this->api_valid_token();

        if($app_token === $api_token){
            return "true";
        }else{
            return "false";
        }
    }

    public function redirect_to_aplication()
    {
        $compara_usuario = $this->same_user_name();
        $compara_password = $this->same_user_password();
        $compara_token = $this->tokens_are_equal();

        if($compara_usuario && $compara_password && $compara_token){
            return "true";
        }else{
            return "false";
        }


    }


}

 
