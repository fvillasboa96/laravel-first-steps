<?php

namespace App\Http\Controllers;
use App\Models\Productos;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        $productos = Productos::available()->get();
        return view('welcome')->with([
            'productos' => $productos,
        ]);
    }
}
