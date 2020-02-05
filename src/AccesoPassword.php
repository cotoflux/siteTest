<?php
declare(strict_types=1);

namespace cotoflux\site_test;



Class AccesoPassword
{
    public $API_PASSWORD_ELEC; 


    public function __construct()
    {
        

       $this->API_PASSWORD_ELEC = config('apiwork.Site.secret');


    }

}
