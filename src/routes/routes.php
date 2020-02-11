
<?php

use App\Http\Controllers\originTrueController;
use Illuminate\Http\Request;

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


Route::get('/v1/auth/keyresponse', 'originKeyController@keyresponse')->middleware(["guest"])->name("Session.origin.key");
//La ruta como debería ser a la espera de configuración de Carlos:
//Route::post('/v1/auth/keyresponse', 'originTrueController@keyresponse')->middleware(["guest"])->name("Session.origin");
Route::get('/v1/auth/userresponse', 'originKeyController@userresponse')->middleware(["guest"])->name("Session.origin.user");
Route::get('/v1/auth/passwordresponse', 'originKeyController@passwordresponse')->middleware(["guest"])->name("Session.origin.pass");

Route::get('/v1/auth/check', 'returnBearerController@check')->middleware(["guest"])->name("Session.check");

//Route::resource("/v1/auth/login", "SessionController")->only('store');
//Route::post("/v1/auth/login", "SessionController@login")->middleware(["guest"])->name("Session.login");
//Route::delete("/v1/auth/logout", "SessionController@logout")->name("Session.logout");
//Route::get("/v1/auth/check", "originTrueController@check")->middleware(["guest"])->name("Session.check");


//WEB.PHP

/* Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */