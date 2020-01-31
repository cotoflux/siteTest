<?php

use PHPUnit\Framework\TestCase;
use cotoflux\api_work\SiteAPIClient;
use GuzzleHttp\Client;
use Symfony\Component\VarDumper;



class SiteAPIClientTest extends TestCase
{
    public function test_obtainURL_electry()
    {
        $respuestaClasse = new SiteAPIClient();
        $respuesta = $respuestaClasse->obtainURL();
        $this->assertEquals("https://site.electryconsulting.com/api/v1", $respuesta);
    }

    public function test_CorrectUser()
    {   
       
        $respuestaClasse = new SiteAPIClient();
        $this->assertEquals(USER, $respuestaClasse->auth_email);

    }

    public function test_CorrectPassword()
    {
        $respuestaClasse = new SiteAPIClient();
        $this->assertEquals(PASSWORD, $respuestaClasse->auth_pass);
    }

    public function test_ATokenExists()
    {
        $respuestaClasse = new SiteAPIClient();
        $this->assertNotNull($respuestaClasse->accessToken);
    }

    public function test_CheckAuthorisation()
    {
        $respuestaClasse = new SiteAPIClient();
        $respuestaServidor = $respuestaClasse->check_ok_token_returns_bearerToken();
        $respuestaClasseToken = $respuestaClasse->accessToken;
        $this->assertEquals($respuestaClasseToken, $respuestaServidor);
    }
    public function test_ReturnResponseAuthorization()
    {
        $respuestaClasse = new SiteAPIClient();
        $respuesta = $respuestaClasse->sendResponseToCoreApi();
        $this->assertEquals('true', "$respuesta");
    }

    public function test_ReturnJsonWithCheck()
    {
        $respuestaClasse = new SiteAPIClient();
        $respuestaBearer = $respuestaClasse->check_ok_token_returns_bearerToken();
        $respuestaClasseToken = $respuestaClasse->accessToken;
        $this->assertEquals($respuestaClasseToken , $respuestaBearer);
    }


    

} 