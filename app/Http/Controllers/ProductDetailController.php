<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductDetailController extends Controller
{
    function productDetailFunction($id){
        $productDetail = Products::findOrFail($id);
        return view('product-detail',['data'=>$productDetail]);
    }
}
