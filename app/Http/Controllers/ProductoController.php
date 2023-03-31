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
        //dd('Estamos en store');
        /*Producto::create([
            'title' => request()->title,
            'description' => request()->description,
            'price' => request()->price,
            'stock' => request()->stock,
            'status' => request()->status,
        ]);*/

        $producto = Producto::create(request()->all());

        return $producto;
    }

    public function create(){
        return view('productos.create');
    }

    public function show($producto){
        //A traves de QueryBuilder
        //$producto = DB::table('productos')->where('id', $producto)->first();
        //$producto = DB::table('productos')->find($producto);
        //findOrFail Lanza una excepcion si no encuentra el producto
        $producto = Productos::findOrFail($producto);
        //dd($producto);
        return view('productos.show')->with([
            'producto' => $producto,
        ]);
    }

    public function edit($producto){
        return view('productos.edit')->with([
            'producto' => Productos::findOrFail($producto),
        ]); 
    }

    public function update(){
        $producto = Product::findOrFail($producto);
        $producto->update(request()->all());
        return $producto; 
    }

    public function destroy($producto){
        $producto = Productos::findOrFail($producto);
        $producto->delete();
        return $producto;
    }
}
