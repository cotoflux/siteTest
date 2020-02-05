<?php
declare(strict_types=1);

namespace cotoflux\site_test;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;



Class MyAppTokenGenerator
{

    public $token;
    public function __construct()
    {
        $this->token = bin2hex(random_bytes(64));
      
    }

}