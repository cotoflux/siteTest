
<?php

use PHPUnit\Framework\TestCase;
use App\Request;


class RequestTest extends TestCase
{

        public function testHasUrl()
        {

            $this->assertInstanceOf(
                Request::class,
                Request::urlLogin("https://site.electryconsulting.com")
            );
        }

        public function test_IsWorkingUrl()
        {   
            $real = new Request();
            $realValue = $real->urlIsWorking();
            $expectedValue = "true";
            
            $this->assertSame($expectedValue, $realValue);
               
        }


}