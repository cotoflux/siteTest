<?php

use PHPUnit\Framework\TestCase;
use App\SiteAPIClient;
use GuzzleHttp\Client;
use Symfony\Component\VarDumper;



class SiteAPIClientTest extends TestCase
{
    public function test_CorrectUser()
    {   
       
        $respuestaClasse = new SiteAPIClient();
        //$expectedUser = 'test@test.test';
        //dd($respuestaClasse->auth_email);
        $this->assertEquals('test@test.test', $respuestaClasse->auth_email);

    }

    public function test_CorrectPassword()
    {
        $respuestaClasse = new SiteAPIClient();
        $this->assertEquals('test1234', $respuestaClasse->auth_pass);
    }

    public function test_ATokenExists()
    {
        $respuestaClasse = new SiteAPIClient();
        $this->assertNotNull($respuestaClasse->accessToken);
    }

    public function test_CheckAuthorisation()
    {
        $respuestaClasse = new SiteAPIClient();
        $respuestaServidor = $respuestaClasse->get_serversOK();

        //$respuestaClasse = new SiteAPIClient();
        $respuestaClasseToken = $respuestaClasse->accessToken;
        $this->assertEquals($respuestaClasseToken, $respuestaServidor);
    }
    public function test_ReturnResponseAuthorization()
    {
        $respuestaClasse = new SiteAPIClient();
        $respuesta = $respuestaClasse->sendResponse();

        $this->assertEquals('true', "$respuesta");
    }
    

} 