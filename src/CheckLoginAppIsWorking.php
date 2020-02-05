<?php
declare(strict_types=1);

namespace cotoflux\site_test;

use cotoflux\site_test\AccesoURL;
use GuzzleHttp\Client;
use Symfony\Component\VarDumper;


class CheckLoginAppIsWorking{

    public $urlLogin;

    public function asignarURL(){
        $todasLasUrl = new AccesoURL();
        $urlLogin = $todasLasUrl->API_URL_ELEC;
        
        return $urlLogin;
    }

    public function urlLogin(String $urlLogin):self
    {

        return new self($urlLogin);
               
    }

    public function urlIsWorking()
    {
       
        $client = new Client();

        $my_urlLogin = new CheckLoginAppIsWorking;
        $todaLaURL = $my_urlLogin->asignarURL();
        $urlHost = parse_url($todaLaURL);
        $url_login= $urlHost['host'];
        //dd($urlparseada_host);

        $res = $client->request('GET', $url_login, ['headers' => ['Accept' => 'application/json','Content-type' => 'application/json']]);
            
        $status = $res->getStatusCode();

     
            if($status == 200){
                return "true";
            } else{
                return "false";
            }

    }

}


