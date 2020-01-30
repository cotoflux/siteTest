<?php

use App\AccesoURL;
use PHPUnit\Framework\TestCase;
use App\CheckLoginAppIsWorking;


class AccesoURLTest extends TestCase
{

      public function test_accedo_url_electry(){
        $reciboClasse = new AccesoURL();
        $miUrl = $reciboClasse->API_URL_ELEC;
        $this->assertEquals("https://site.electryconsulting.com/api/v1", $miUrl);
    }

    public function test_accedo_url_json(){
        $reciboClasse = new AccesoURL();
        $miUrl = $reciboClasse->API_URL_JSON;
        $this->assertEquals("https://jsonplaceholder.typicode.com", $miUrl);
    }
    

}

