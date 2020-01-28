<?php

use PHPUnit\Framework\TestCase;
use App\TokenGeneratorMyApp;
use GuzzleHttp\Client;
use Symfony\Component\VarDumper;



class TokenGeneratorMyAppTest extends TestCase
{
    

    public function test_getting_the_token()
    {   
       
        $respuestaClasse = new TokenGeneratorMyApp();
        //dd($respuestaClasse);
        $this->assertNotNull($respuestaClasse);

    }

}