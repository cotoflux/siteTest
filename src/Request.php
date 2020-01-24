<?php
declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;
use Symfony\Component\VarDumper;

class Request{

    public $urlLogin = 'https://site.electryconsulting.com';

    public function urlLogin(String $urlLogin):self
    {
        return new self($urlLogin);
       
    }

    public function urlIsWorking()
    {
        
        $client = new Client();

        $res = $client->request('GET', 'https://site.electryconsulting.com', ['headers' => ['Accept' => 'application/json','Content-type' => 'application/json']]);
            //
        $status = $res->getStatusCode();
        
            //$array = json_decode($res, true);
            //$myValor = $array-["reasonPharse"];
       
        //dump($status);
     
            if($status == 200){
                return "true";
            } else{
                return "false";
            }

    }


}


