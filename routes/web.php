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

Route::resource('productos', 'ProductoController');

// //Retornar listado o index
// Route::get('productos', 'ProductoController@index')->name('productos.index');

// //Mostrar formulario para crear un producto
// Route::get('productos/create', 'ProductoController@create')->name('productos.create');

// //Método que permite ingresar un producto
// Route::post('productos', 'ProductoController@store')->name('productos.store');

// //Mostrar formulario para editar producto
// Route::get('productos/{producto}/edit', 'ProductoController@edit')->name('productos.edit');
// //Mostrar un producto
// Route::get('productos/{producto:title}', 'ProductoController@show')->name('productos.show');

// //Actualiza un producto
// Route::match(['put', 'patch'], 'productos/{producto}', 'ProductoController@update')->name('productos.update');

// //Elimina un producto
// Route::delete('productos/{producto}', 'ProductoController@destroy')->name('productos.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
