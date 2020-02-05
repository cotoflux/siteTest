<?php



return [
    'Site' => [
        'token' => env('APIWORK_SITE_TOKEN','abcdefghi'),
        'endpoint' =>  env('APIWORK_SITE_ENDPOINT',"https://site.electryconsulting.com/api/v1"),
        'secret' => env('APIWORK_EGO_SECRET','test1234'),
        'user' => env('APIWORK_EGO_USER','test@test.test'),

    ],
    'Ego' => [
        'token' => env('APIWORK_EGO_TOKEN',"abcdefghi"),
        'endpoint' => env('APIWORK_EGO_ENDPOINT',"https://site.electryconsulting.com/api/v1"),
        'secret' => env('APIWORK_EGO_SECRET','PASSWORD'),
        'user' => env('APIWORK_EGO_USER','USER'),
    ],
];