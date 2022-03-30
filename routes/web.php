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

<<<<<<< HEAD
Route::get('products', 'ProductController@index')->name('products.index');

Route::get('products/create', 'ProductController@create')->name('products.create');

Route::post('products', 'ProductController@store')->name('products.store');

Route::get('products/{product}', 'ProductController@show')->name('products.show');

Route::get('products/{product}/edit', function ($product) {
    return 'Mostrando formulario para editar producto con id {$product}';
})->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', function ($product) {
    //return 'Lista de Productos';
})->name('products.update');

Route::delete('products/{product}', function ($product) {
    //return 'Mostrando formulario para editar producto con id {$product}';
})->name('products.destroy');
=======
Route::get('products', function () {
    return 'Hola Mundo';
})->name('products.index');
>>>>>>> 5a0199c30053b7f28ea1fc8852cdd18318ab2a07
