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
        $this->assertEquals('EMAIL', $respuestaClasse->auth_email);

    }

    public function test_CorrectPassword()
    {
        $respuestaClasse = new SiteAPIClient();
        $this->assertEquals('PASSWORD', $respuestaClasse->auth_pass);
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