<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopingController extends Controller
{
    function shopFunction(){
        return view('shoping-cart');
    }
}
