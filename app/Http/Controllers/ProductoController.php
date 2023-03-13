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

        //dd($productos);
        //return $productos; //Puede recuperar en formato json plano el resultado
        return view('productos.index')->with([
            'productos' => $productos,
        ]);
    }

    public function store(){
        dd('Estamos en store');
        //return 'Metodo para guardar producto';
    }

    public function create(){
        return view('productos.create');
    }

    public function show($product){
        //A traves de QueryBuilder
        //$producto = DB::table('productos')->where('id', $producto)->first();
        //$producto = DB::table('productos')->find($producto);
        //findOrFail Lanza una excepcion si no encuentra el producto
        $producto = Productos::findOrFail($product);
        //dd($producto);
        return view('productos.show')->with([
            'producto' => $producto,
        ]);
    }

    public function edit($producto){
        return "Metodo para guardar mostrar formulario de edicion"; 
    }

    public function update(){
        return "Metodo para actualizar un producto"; 
    }

    public function destroy(){
        return 'Método para eliminar un producto';
    }
}
