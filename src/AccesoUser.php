<?php
declare(strict_types=1);

namespace cotoflux\site_test;



Class AccesoUser
{
    public $API_USER_ELEC; 


    public function __construct()
    {
        

       $this->API_USER_ELEC = config('apiwork.Site.user');


    }

}
