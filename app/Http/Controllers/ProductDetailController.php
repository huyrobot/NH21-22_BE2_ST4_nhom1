<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    function productDetailFunction(){
        return view('product-detail');
    }
}
