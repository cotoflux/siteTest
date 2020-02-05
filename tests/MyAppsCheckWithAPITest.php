<?php

use cotoflux\siteTest\MyAppsCheckWithAPI;
use PHPUnit\Framework\TestCase;

use GuzzleHttp\Client;
use Symfony\Component\VarDumper;



class MyAppsCheckWithAPITest extends TestCase  
{
    //USER
    public function test_myApp_username()
    {
        $respuestaClasse = new MyAppsCheckWithAPI();
        $respuesta =$respuestaClasse->get_my_apps_name();
        $this->assertEquals(USER, $respuesta);
    }

    public function test_api_username()
    {
        $respuestaClasse = new MyAppsCheckWithAPI();
        $respuesta =$respuestaClasse->get_my_api_name();
        $this->assertEquals(USER, $respuesta);
    }

    public function test_username_myapp_and_api_are_the_same()
    {
        $respuestaClasse = new MyAppsCheckWithAPI();
        $respuesta = $respuestaClasse->same_user_name();
        $this->assertEquals("true", $respuesta);
    }

    //PASSWORD


    public function test_myApp_password()
    {
        $respuestaClasse = new MyAppsCheckWithAPI();
        $respuesta =$respuestaClasse->get_my_apps_password();
        $this->assertEquals(PASSWORD, $respuesta);
    }

    public function test_api_password()
    {
        $respuestaClasse = new MyAppsCheckWithAPI();
        $respuesta =$respuestaClasse->get_my_api_password();

        $this->assertEquals(PASSWORD, $respuesta);
    }

    public function test_password_myapp_and_api_are_the_same()
    {
        $respuestaClasse = new MyAppsCheckWithAPI();
        $respuesta = $respuestaClasse->same_user_password();
        $this->assertEquals("true", $respuesta);
    } 

    //TOKEN

    public function test_my_app_token()
    {
        $respuestaClasse = new MyAppsCheckWithAPI();
        $respuestaTokenFake = $respuestaClasse->app_valid_token();
        $this->assertEquals("true", $respuestaTokenFake);

    }

    public function test_api_token()
    {
        $respuestaClasse = new MyAppsCheckWithAPI();
        $respuestaTokenFake = $respuestaClasse->api_valid_token();
        $this->assertEquals("true", $respuestaTokenFake);

    }   

    public function test_both_tokens_are_equal(){
        $respuestaClasse = new MyAppsCheckWithAPI();
        $app_respuesta = $respuestaClasse->app_valid_token();
        $api_respuesta = $respuestaClasse->api_valid_token();
        $this->assertEquals($app_respuesta, $api_respuesta);
    }

    public function test_ok_to_redirect_to_aplication(){
        $respuestaClasse = new MyAppsCheckWithAPI();
        $respuesta = $respuestaClasse->redirect_to_aplication();
        $this->assertEquals('true', $respuesta);
    }
    
   
} 
    
