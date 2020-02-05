<?php
declare(strict_types=1);

namespace cotoflux\site_test;



Class MyAppTokenGenerator
{

    public $token;
    public function __construct()
    {
        $this->token = bin2hex(random_bytes(64));
      
    }

}