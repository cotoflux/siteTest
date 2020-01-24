<?php

use PHPUnit\Framework\TestCase;
use App\SiteAPIClient;
use GuzzleHttp\Client;
use Symfony\Component\VarDumper;

include("../guarda/information.php");


class SiteAPIClientTest extends TestCase
{
    public function test_CorrectUser()
    {   
       
        $respuestaClasse = new SiteAPIClient();
        //$expectedUser = 'test@test.test';
        //dd($respuestaClasse->auth_email);
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

        //$respuestaClasse = new SiteAPIClient();
        $respuestaClasseToken = $respuestaClasse->accessToken;
        $this->assertEquals($respuestaClasseToken, $respuestaServidor);
    }

} 