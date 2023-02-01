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
Route::get('productos', function () {
    return 'Pagina de Inicio';
})->name('productos.index');

//Ingresar un producto
Route::post('productos', function () {
    //return 'Pagina de Inicio';
})->name('productos.index');

//Accion para editar
Route::match(['put', 'patch'], 'productos/{producto}', function ($producto) {
    return 'Pagina de Inicio';
})->name('productos.edit');

//Mostrar
Route::post('productos/{producto}', function ($producto) {
    //return 'Pagina de Inicio';
})->name('productos.show');