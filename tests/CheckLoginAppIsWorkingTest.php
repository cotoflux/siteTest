
<?php

use PHPUnit\Framework\TestCase;
use App\CheckLoginAppIsWorking;


class CheckLoginAppIsWorkingTest extends TestCase
{

        public function testHasUrl()
        {

            $this->assertInstanceOf(
                CheckLoginAppIsWorking::class,
                CheckLoginAppIsWorking::urlLogin("https://site.electryconsulting.com")
            );
        }

        public function test_IsWorkingUrl()
        {   
            $real = new CheckLoginAppIsWorking();
            $realValue = $real->urlIsWorking();
            $expectedValue = "true";
            
            $this->assertSame($expectedValue, $realValue);
               
        }


}