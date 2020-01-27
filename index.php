<?php
declare(strict_types=1);
namespace App;
include 'src/SiteAPIClient.php';

require_once('vendor/autoload.php');


$password = 'test1234';
$email = 'test@test.test';

$apiWork = new SiteAPIClient($email,$password);
$responseApi = $apiWork->sendResponse();
echo '<pre>';
echo(strVal($responseApi));echo '</pre>';
