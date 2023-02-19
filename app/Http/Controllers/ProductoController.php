<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index(){
        //Obtener datos por medio del Query Builder
        $productos = DB::table('productos')->get();

        //Obteneer datos por medio del modelo
        $productos = Productos::all();

        dd($productos);
        //return $productos; //Puede recuperar en formato json plano el resultado
        return view('productos.index');
    }

    public function store(){

    }

    public function show($product){
        //A traves de QueryBuilder
        //$producto = DB::table('productos')->where('id', $producto)->first();
        //$producto = DB::table('productos')->find($producto);
        //findOrFail Lanza una excepcion si no encuentra el producto
        $producto = Productos::findOrFail($product);
        //dd($producto);
        return $producto;
    }

    public function edit($producto){
        return "Producto Editado"; 
    }

    public function update(){

    }

    public function destroy(){

    }
}
