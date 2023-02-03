<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Retornar listado o index
Route::get('productos', 'ProductoController@index')->name('productos.index');

Route::get('productos/create', 'ProductoController@create')->name('productos.create');

//Ingresar un producto
Route::post('productos', 'ProductoController@store')->name('productos.store');

//Mostrar
Route::get('productos/{producto}', 'ProductoController@show')->name('productos.show');

Route::get('productos/{producto}/edit', 'ProductoController@edit')->name('productos.edit');

//Accion para editar
Route::match(['put', 'patch'], 'productos/{producto}', 'ProductoController@update')->name('productos.update');

Route::delete('productos/{producto}', 'ProductoController@destroy')->name('productos.edit');

