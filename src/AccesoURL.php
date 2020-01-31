<?php
declare(strict_types=1);

namespace cotoflux\api_work;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;



Class AccesoURL
{
    public $API_URL_ELEC; 
    public $API_URL_JSON;

    public function __construct()
    {
        $this->API_URL_ELEC = "https://site.electryconsulting.com/api/v1";  ;
        $this->API_URL_JSON = "https://jsonplaceholder.typicode.com";
    }

}

