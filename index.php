<?php
declare(strict_types=1);
namespace App;
include 'src/SiteAPIClient.php';
include 'src/MyAppsActivityLogin.php';
include 'src/TokenGeneratorMyApp.php';
require_once('vendor/autoload.php');


$password = 'test1234';
$email = 'test@test.test';

$apiWork = new SiteAPIClient($email,$password);
$responseApi = $apiWork->sendResponseToCoreApi();
echo '<pre>';
echo(strVal($responseApi));echo '</pre>';


 $producto = new MyAppsActivityLogin('test@test.test', 'test1234');

 $producto->get_userLoginApp('test@test.test');
 $producto->get_passwordLoginApp('test1234');

 echo '<hr>';
 echo 'user ' . $producto->get_userLoginApp() . '<br />';
 echo 'password ' . $producto->get_passwordLoginApp() . '<br />';
 
 

