<?php

require('./guarda/information.php');

return [
    'config'=>[
        'Site' => [
            'token' => env('APIWORK_SITE_TOKEN','abcdefghi'),
            'endpoint' =>  env('APIWORK_SITE_ENDPOINT',URL),
            'secret' => env('APIWORK_EGO_SECRET','PASSWORD'),
            'user' => env('APIWORK_EGO_USER','USER'),

        ],
        'Ego' => [
            'procedencia' => env('APIWORK_EGO_TOKEN',"abcdefghi"),
            'endpoint' => env('APIWORK_EGO_ENDPOINT',URL),
            'secret' => env('APIWORK_EGO_SECRET','PASSWORD'),
            'user' => env('APIWORK_EGO_USER','USER'),
        ],
    ]
];