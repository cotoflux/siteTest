<?php
declare(strict_types=1);
namespace App;
include 'src/SiteAPIClient.php';
require_once('vendor/autoload.php');




$password = 'test1234';
$email = 'test@test.test';

$cw_api = new SiteAPIClient($email,$password);
$servers = $cw_api->get_serversOK();
echo '<pre>';
var_dump($servers);echo '</pre>';
