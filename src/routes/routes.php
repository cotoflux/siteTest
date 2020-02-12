<?php
        

use Illuminate\Http\Request;
use cotoflux\site_test\Controllers\originKeyController;
use cotoflux\site_test\Controllers\returnBearerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/auth/keyresponse',  function (originKeyController $kc) {
    return $kc->keyresponse();
})->middleware(["guest"])->name("Session.origin.key");
//La ruta como debería ser a la espera de configuración de Carlos:
//Route::post('/v1/auth/keyresponse', 'originTrueController@keyresponse')->middleware(["guest"])->name("Session.origin");

Route::get('/v1/auth/userresponse', function (originKeyController $okc) {
    return $okc->userresponse();
})->middleware(["guest"])->name("Session.origin.user");

Route::get('/v1/auth/passwordresponse', function (originKeyController $okc) {
    return $okc->passwordresponse();
})->middleware(["guest"])->name("Session.origin.pass"); 

Route::get('/v1/auth/check', function (returnBearerController $rbc) {
    return $rbc->check();
})->middleware(["guest"])->name("Session.check");