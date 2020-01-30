
<?php

use App\AccesoURL;
use PHPUnit\Framework\TestCase;
use App\CheckLoginAppIsWorking;


class CheckLoginAppIsWorkingTest extends TestCase
{

        public function test_asignURL()
        {
            $claseAcceso = new AccesoURL();
            $myresult = $claseAcceso->API_URL_ELEC;

            $claseCheck = new CheckLoginAppIsWorking();
            $urlEsperada= $claseCheck->asignarURL();

            $this->assertEquals($urlEsperada, $myresult);
        }

        public function test_HasUrl()
        {
            $resultClass = new CheckLoginAppIsWorking();
            $result = $resultClass;


            $this->assertInstanceOf(
                CheckLoginAppIsWorking::class,
                CheckLoginAppIsWorking::urlLogin("https://site.electryconsulting.com")
            );
        }

        public function test_IsWorkingUrl()
        {   
            $real = new CheckLoginAppIsWorking();
            $realValue = $real->urlIsWorking();
            //dd($realValue);
            $expectedValue = "true";
            
            $this->assertSame($expectedValue, $realValue);
               
        }


}