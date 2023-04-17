<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CartServices;

class CartController extends Controller
{
    public $cartServices;

    public function __construct(CartServices $cartServices){
        $this->cartServices = $cartServices;
    }
    public function index(){
        return view('carts.index')->with([
            'cart' => $this->cartServices->getFromCookieOrCreate(),
        ]);
       // return $cart->productos;
    }

}
