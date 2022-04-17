<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index'); //todas excepto index
        //$this->middleware('auth')->only('index'); Solo a index
    }

    public function index(){

        //$product = Product::all();
        //dd($product);

        return view('products.index')->with([
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        /*$product = Product::create([
            'title' => request()->title,
            'description' => request()->description,
            'price' => request()->price,
            'stock' => request()->stock,
            'status' => request()->status,
        ]);*/

        //Reglas de validacion
        /*$rules = [
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:1000'],
            'price' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:available, unavailable'],
        ];

        request()->validate($rules);*/

       /* if ($request->status == 'available' && $request->stock == 0) {
            //DENTRO DEL IF
        //if (request()->status == 'available' && request()->stock == 0) { //metodo request   
            //session()->put('error', 'El stock no debe ser cero');
            //session()->flash('error', 'El stock no debe ser cero');
            return redirect()->
                back()->
                //withInput(request()->all())->
                withInput($request->all())->
                withErrors('El stock no debe ser cero'); //Agregando a los errores
        }*/

        dd(request()->all(), $request->all(), $request->validated());

        //session()->forget('error');

        $product = Product::create($request->validated());

        session()->flash('success', "Producto con ID: {$product->id} creado");

       // return redirect()->back(); //REgresa hacia la vista anterior
       // return redirect()->action('ProductController@index')
        return redirect()->route('products.index')
            ->withSuccess("Producto con ID: {$product->id} creado"); //Retorna al index
            //->with(['success' => "Producto con ID: {$product->id} creado"]);
    }

    public function show(Product $product)
    {
         return view('products.show')->with([
            //'product' => Product::findOrfail($product),
            'product' => $product,
        ]);
    }

    public function edit(Product $product)
    {
        return view('products.edit')->with([
            //'product' => Product::findOrfail($product)
            'product' => $product,
        ]);
    }

    /**Inyeccion implicita de modelos **/

    public function update(Product $product, ProductRequest $request)
    {
        //$product = Product::findOrfail($product);
        //$product->update(request()->all());
        $product->update($request->validated());

        return redirect()->route('products.index')
            ->withSuccess("Producto con ID: {$product->id} editado");
    }

    public function destroy(Product $product)
    {
        //$product = Product::findOrfail($product);
        $product->delete();
        return redirect()->route('products.index')
            ->withSuccess("Producto con ID: {$product->id} eliminado");
    }

}
