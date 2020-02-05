<?php
declare(strict_types=1);

namespace cotoflux\api_work;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;



Class AccesoPassword
{
    public $API_PASSWORD_ELEC; 


    public function __construct()
    {
        

       $this->API_PASSWORD_ELEC = config('apiwork.Site.secret');


    }

}
