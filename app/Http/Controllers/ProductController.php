<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $product = Product::all();

        dd($product);

        return view('products.index');
    }

    public function create()
    {
        return 'Formulario para crear nuevo producto';
    }

    public function store()
    {
        // code...
    }

    public function show($product)
    {

        $product = Product::findOrfail($product);

        dd($product);

        return 'Producto con Id {$product}';
    }

    public function edit($product)
    {
        return 'Formulario de editar con id {$product}';
    }

    public function update($product)
    {
        // code...
    }

    public function destroy($product)
    {
        // code...
    }

}
