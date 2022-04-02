<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopingController extends Controller
{
    function shop(){
        return view('shoping-cart');
    }
}
