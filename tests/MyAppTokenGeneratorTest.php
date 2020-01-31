<?php

use PHPUnit\Framework\TestCase;
use cotoflux\api_work\MyAppTokenGenerator;
use GuzzleHttp\Client;
use Symfony\Component\VarDumper;



class MyAppTokenGeneratorTest extends TestCase
{
    

    public function test_getting_the_token()
    {   
       
        $respuestaClasse = new MyAppTokenGenerator();
        $this->assertNotNull($respuestaClasse);

    }

}