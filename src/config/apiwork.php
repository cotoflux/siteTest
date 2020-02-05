<?php



return [
    'Site' => [
        'token' => env('APIWORK_SITE_TOKEN','abcdefghi'),
        'endpoint' =>  env('APIWORK_SITE_ENDPOINT',"APIURL"),
        'secret' => env('APIWORK_EGO_SECRET','PASSWORD'),
        'user' => env('APIWORK_EGO_USER','USER'),

    ],
    'Ego' => [
        'token' => env('APIWORK_EGO_TOKEN',"abcdefghi"),
        'endpoint' => env('APIWORK_EGO_ENDPOINT',"APIURL"),
        'secret' => env('APIWORK_EGO_SECRET','PASSWORD'),
        'user' => env('APIWORK_EGO_USER','USER'),
    ],
];