<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){

        return view('welcome')->with([
            'products' => Product::all(),
        ]);
    }
}
