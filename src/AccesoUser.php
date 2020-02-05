<?php
declare(strict_types=1);

namespace cotoflux\site_test;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;



Class AccesoUser
{
    public $API_USER_ELEC; 


    public function __construct()
    {
        

       $this->API_USER_ELEC = config('apiwork.Site.user');


    }

}
