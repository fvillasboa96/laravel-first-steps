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

        $rules = [
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:2000'],
            'price' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:available,unavailable'],
        ];

        request()->validate($rules);

        if (request()->status == 'available' && request()->stock == 0) {
            //session()->flash('error', 'Debe tener Stock');
            return redirect()
                ->back()
                ->withInput()
                ->withErrors('Debe tener Stock');//Utilizar está opción en vez de agregar una variable flash
        }

        //dd('Estamos en store');
        /*Producto::create([
            'title' => request()->title,
            'description' => request()->description,
            'price' => request()->price,
            'stock' => request()->stock,
            'status' => request()->status,
        ]);*/

        $producto = Productos::create(request()->all());

        //session()->flash('success', 'El producto con id {{$producto->id}} ha sido creado');

        //return $producto;
        return redirect()
            ->route('productos.index') //Lo mas recomendable
            ->withSuccess('El producto con id {{$producto->id}} ha sido creado');
            //->with(['success'] => 'xxxxx')// Forma corta de agregar una variable success a la sesion
        return redirect()->action('ProductoController@index');
        return redirect()->back(); //Cuando se desea redirigir a la vista anterior
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

    public function update($producto){
        $rules = [
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:2000'],
            'price' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:available,unavailable'],
        ];

        request()->validate($rules);
        $producto = Productos::findOrFail($producto);
        $producto->update(request()->all());
        return redirect()->route('productos.index')
            ->withSuccess('El producto con id {{$producto->id}} ha sido editado');; //Lo mas recomendable
    }

    public function destroy($producto){
        $producto = Productos::findOrFail($producto);
        $producto->delete();
        return redirect()->route('productos.index')
            ->withSuccess("El producto con id {$producto->id} ha sido eliminado");; //Lo mas recomendable
    }
}
