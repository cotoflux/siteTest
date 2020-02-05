<?php
declare(strict_types=1);

namespace cotoflux\site_test;




Class AccesoURL
{
    public $API_URL_ELEC; 


    public function __construct()
    {
        $this->API_URL_ELEC = config('apiwork.Site.endpoint');

    }


}


