<?php
declare(strict_types=1);
namespace cotoflux\api_work;


require_once('vendor/autoload.php');



$apiWork = new MyAppsCheckWithAPI();
$responseApi = $apiWork->redirect_to_aplication();
echo '<pre>';
echo(strVal($responseApi));echo '</pre>';


 

