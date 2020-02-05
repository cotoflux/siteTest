<?php
declare(strict_types=1);

namespace cotoflux\api_work;


use cotoflux\api_work\AccesoURL;
use cotoflux\api_work\AccesoPassword;
use cotoflux\api_work\AccesoUser;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;



Class SiteAPIClient
{
    private $client = null;
    public $auth_email;
    public $auth_pass;
    public $accessToken;
    


    public function __construct($email='',$password='',$accessToken=null)
    {
        $this->auth_pass = $this->obtainPassword();
        $this->auth_email = $this->obtainUser();
        $this->client = new Client();
        $this->accessToken = $this->obtain_access_token();
        $this->check_ok_token_returns_bearerToken();  

    }

    public function obtainURL()
    {   
        $return = new AccesoURL();
        $mi_url = $return->API_URL_ELEC;
        return $mi_url;
    }

    public function obtainUser()
    {
        $return = new AccesoUser();
        $mi_user = $return->API_USER_ELEC;
        return $mi_user;
    }

    public function obtainPassword()
    {
        $return = new AccesoPassword();
        $mi_password = $return->API_PASSWORD_ELEC;
        return $mi_password;
    }
    public function obtain_access_token()
    {   try{$url = $this->obtainURL() . '/auth/login';
            $data = ['user' => $this->auth_email,'password' => $this->auth_pass];                       
            //dd($data);
            $response = $this->client->post($url, ['query' => $data]);
            $result = json_decode($response->getBody()->getContents()); 
            $this->accessToken = $result->data->token;
            $recievedToken = $this->accessToken;

            return $recievedToken;
        }
        catch (RequestException $e){$response = $this->StatusCodeHandling($e);
            return $response;}
    }

    public function check_ok_token_returns_bearerToken()
    {   
        $url = $this->obtainURL().'/auth/check';$option = array('exceptions' => false);
        $header = array('Authorization'=>'Bearer ' . $this->accessToken);
        $response = $this->client->get($url, array('headers' => $header));
        $result = json_decode($response->getBody()->getContents());
        $bearerToken = $result->data->token;
        return ($bearerToken); 

    }

    
    public function StatusCodeHandling($e)
    {

        if ($e->getResponse()->getStatusCode() == '400')
        {
            $this->obtain_access_token();
        }elseif ($e->getResponse()->getStatusCode() == '422')
        {
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }elseif ($e->getResponse()->getStatusCode() == '500')
        {
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }elseif ($e->getResponse()->getStatusCode() == '401')
        {
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }elseif ($e->getResponse()->getStatusCode() == '403')
        {
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }else{$response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }
    }


    public function sendResponseToCoreApi()

    {
        $responseToken=$this->obtain_access_token();
      
        $responseServer=$this->check_ok_token_returns_bearerToken();

        if($responseToken === $responseServer){
            return "true";
        }else{
            return "false";
        }

    }
    
}


