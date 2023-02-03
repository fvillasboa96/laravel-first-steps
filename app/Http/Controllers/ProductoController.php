<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('productos.index');
    }

    public function store(){

    }

    public function show($producto){

    }

    public function edit($producto){
        return "Producto Editado"; 
    }

    public function update(){

    }

    public function destroy(){

    }
}
