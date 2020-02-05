<?php
declare(strict_types=1);

namespace cotoflux\siteTest;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;



Class AccesoURL
{
    public $API_URL_ELEC; 


    public function __construct()
    {
        $this->API_URL_ELEC = config('apiwork.Site.endpoint');

    }


}


