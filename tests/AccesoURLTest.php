<?php


use cotoflux\site_test\AccesoURL;
use PHPUnit\Framework\TestCase;



class AccesoURLTest extends TestCase
{

      public function test_accedo_url_electry(){
        $reciboClasse = new AccesoURL();
        $miUrl = $reciboClasse->API_URL_ELEC;
        $this->assertEquals("APIURL", $miUrl);
    }

    public function test_accedo_url_json(){
        $reciboClasse = new AccesoURL();
        $miUrl = $reciboClasse->API_URL_JSON;
        $this->assertEquals("APIURL", $miUrl);
    }
    

}

