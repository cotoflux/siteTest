<?php


use cotoflux\site_test\MyAppsActivityLogin;
use PHPUnit\Framework\TestCase;
use cotoflux\api_work\SiteAPIClient;
use GuzzleHttp\Client;
use Symfony\Component\VarDumper;



class MyAppsActivityLoginTest extends TestCase
{

    public function test_expected_username()
    {
        $respuestaClasse = new MyAppsActivityLogin();
        $respuesta = $respuestaClasse->get_userLoginApp();
        $this->assertEquals(MYUSER, $respuesta);
    }

    public function test_expected_password()
    {
        $respuestaClasse = new MyAppsActivityLogin();
        $respuesta = $respuestaClasse->get_passwordLoginApp();
        $this->assertEquals(MYPASSWORD, $respuesta);
    }

    public function test_fake_token()
    {
        $respuestaClasse = new MyAppsActivityLogin();
        $respuestaTokenFake = $respuestaClasse->get_tokenLoginApp();
        $this->assertNotEmpty($respuestaTokenFake);

    }
}