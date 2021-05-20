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
Route::get('productesCerca/{keyword}', 'ProductesController@productesCerca');
Route::get('producte/{id}', 'ProductesController@producte');
Route::get('comentaris/{id}', 'ProductesController@comentaris');
Route::post('pujarComentari', 'ProductesController@pujarComentari');


Route::post('eliminarProducte/{id}', 'ProductesController@eliminarProducte');
Route::post('restarStock/{id}', 'ProductesController@restarStock');
Route::post('sumarStock/{id}', 'ProductesController@sumarStock');
Route::post('canviEstat/{id}', 'ProductesController@canviEstat');
Route::post('editarProducte', 'ProductesController@editarProducte');


Route::get('veureCistella', 'CistellaController@veureCistella');
Route::post('afegirCistella/{id}', 'CistellaController@afegirCistella');
Route::post('eliminarCistella/{id}', 'CistellaController@eliminarCistella');
Route::get('veureWishlist', 'WishlistController@veureWishlist');
Route::post('afegirWishlist/{id}', 'WishlistController@afegirWishlist');
Route::post('eliminarWishlist/{id}', 'WishlistController@eliminarWishlist');
Route::post('restarCistella/{id}', 'CistellaController@restarCistella');
Route::post('sumarCistella/{id}', 'CistellaController@sumarCistella');
Route::post('enviarOrdre/{id}', 'OrdersController@enviarOrdre');
Route::post('crearOrdre', 'OrdersController@crearOrdre');
Route::get('veureOrdreUser', 'OrdersController@veureOrdreUser');
Route::get('veureOrdreBotiga', 'OrdersController@veureOrdreBotiga');
Route::get('veureOrdreBotigaEnviat', 'OrdersController@veureOrdreBotigaEnviat');
Route::post('ordreRebuda/{id}', 'OrdersController@ordreRebuda');
Route::get('veureOrdreProcessadaUser', 'OrdersController@veureOrdreProcessadaUser');

Route::post('register', 'RegisterController@register');

Route::post('crearBotiga', 'CrearBotigaController@crearBotiga');

Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout');

Route::post('modifyUser', 'UserController@modify');
Route::post('modifyProfile', 'UserController@modifyProfile');
Route::post('modifyPassword', 'UserController@modifyPassword');



Route::get('botiga', 'BotigaController@botiga');
Route::get('productesB', 'BotigaController@productesB');
Route::get('categories', 'CategoriesController@categories');
Route::post('afegirProducte', 'ProductesController@afegirProducte');
Route::post('modifyShop', 'BotigaController@modifica_botiga');
Route::get('productors', 'BotigaController@productors');
Route::get('productorsCerca/{keyword}', 'BotigaController@productorsCerca');

Route::get('perfil/{id}', 'BotigaController@botigaId');
Route::get('productesBotiga/{id}', 'ProductesController@producteBotiga');
Route::get('perfilBotiga/{id}', 'BotigaController@perfilBotiga');
Route::get('user/{id}', 'UserController@perfilUser');


Route::get('comprovaBotiga', 'BotigaController@comprovaBotiga');