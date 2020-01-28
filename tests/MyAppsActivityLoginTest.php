<?php

use App\MyAppsActivityLogin;
use PHPUnit\Framework\TestCase;
use App\SiteAPIClient;
use GuzzleHttp\Client;
use Symfony\Component\VarDumper;



class MyAppsActivityLoginTest extends TestCase
{

    public function test_exected_username()
    {
        $respuestaClasse = new MyAppsActivityLogin();
        $respuesta = $respuestaClasse->get_userLoginApp();

        $this->assertEquals('test@test.test', $respuesta);
    }

    public function test_exected_password()
    {
        $respuestaClasse = new MyAppsActivityLogin();
        $respuesta = $respuestaClasse->get_passwordLoginApp();
        //dd($respuesta);
        $this->assertEquals('test1234', $respuesta);
    }

    public function test_fake_token()
    {
        $respuestaClasse = new MyAppsActivityLogin();
        $respuestaTokenFake = $respuestaClasse->get_tokenLoginApp();
        $this->assertNotEmpty($respuestaTokenFake);

    }
}