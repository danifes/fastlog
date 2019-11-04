<?php

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

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');


Route::resource('clinicas', 'ClinicasController');
Route::resource('comercialcasas', 'ComercialcasasController');
Route::resource('estados', 'EstadosController');
Route::resource('gps', 'gpsController');
Route::resource('gpsseguimientos', 'GpsseguimientosController');
Route::resource('historiallogins', 'HistorialloginsController');
Route::resource('menus', 'MenusController');
Route::resource('productos', 'ProductosController');
Route::resource('remisiones', 'RemisionesController');
Route::resource('remisionesfirmas', 'RemisionesfirmasController');
Route::resource('remisionesproductos', 'RemisionesproductosController');
Route::resource('roles', 'RolesController');
Route::resource('rutas', 'RutasController');

//mirar luego como hacer el middleware



