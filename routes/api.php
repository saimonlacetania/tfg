<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/athenticated', function () {
    return true;
});
Route::get('productes', 'ProductesController@productes');
Route::get('producte/{id}', 'ProductesController@producte');
Route::post('afegirCistella/{id}', 'CistellaController@afegirCistella');
Route::post('eliminarCistella/{id}', 'CistellaController@eliminarCistella');
Route::post('restarCistella/{id}', 'CistellaController@restarCistella');
Route::post('sumarCistella/{id}', 'CistellaController@sumarCistella');
Route::get('veureCistella', 'CistellaController@veureCistella');
Route::post('register', 'RegisterController@register');
Route::post('crearBotiga', 'CrearBotigaController@crearBotiga');
Route::post('login', 'LoginController@login');
Route::post('modifyUser', 'UserController@modify');
Route::post('modifyProfile', 'UserController@modifyProfile');
Route::post('modifyPassword', 'UserController@modifyPassword');
Route::post('logout', 'LoginController@logout');
Route::get('productes', 'ProductesController@productes');
Route::get('botiga', 'BotigaController@botiga');
