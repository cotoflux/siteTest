<?php
declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;



Class SiteAPIClient
{
    private $client = null;
    const API_URL = 'https://site.electryconsulting.com/api/v1';
    public $auth_email;
    public $auth_pass;
    public $accessToken;
    


    public function __construct()
    {
        $this->auth_pass = 'test1234';
        $this->auth_email = 'test@test.test';
        $this->client = new Client();
        $this->prepare_access_token();
        
    }


    public function prepare_access_token()
    {   try{$url = self::API_URL . '/auth/login';
            $data = ['user' => $this->auth_email,'password' => $this->auth_pass];
            $response = $this->client->post($url, ['query' => $data]);
            $result = json_decode($response->getBody()->getContents()); 
            $this->accessToken = $result->data->token;
            $myresponse = $this->accessToken;
            //$myresponse = $this->accessToken = $result->access_token;
            //dump($myresponse);
            return $myresponse;
        }
        catch (RequestException $e){$response = $this->StatusCodeHandling($e);
            return $response;}

    }

    
    public function StatusCodeHandling($e)
    {
        if ($e->getResponse()->getStatusCode() == '400')
        {
            $this->prepare_access_token();
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

    Public function get_serversOK()
    {
        try
        {
            $url = self::API_URL . '/auth/check';$option = array('exceptions' => false);
            $header = array('Authorization'=>'Bearer ' . $this->accessToken);
            $response = $this->client->get($url, array('headers' => $header));
            $result = json_decode($response->getBody()->getContents());
            $resultado = $result->data->token;
            return $resultado;
            

        }
        catch (RequestException $e)
        {
            $response = $this->StatusCodeHandling($e);return $response;
            
        }
    }

    public function changelabel($serverid,$label)
    {
        try
        {
            $url = self::API_URL . '/server/$serverid';
            $data = ['erver_id' => $serverid,'label' => $label];$header = array('Authorization'=>'Bearer' . $this->accessToken);
            $response = $this->client->put($url, array('query' => $data,'headers' => $header));
            return json_decode($response->getBody()->getContents());
        }
        catch 
        (RequestException $e){$response = $this->StatusCodeHandling($e);return $response;
        }
        
    }

    public function sendResponse()

    {
        $responseToken=$this->prepare_access_token();
      
        $responseServer=$this->get_serversOK();

        if($responseToken && $responseServer){
            return "true";
        }else{
            return "false";
        }

    }
    
}

