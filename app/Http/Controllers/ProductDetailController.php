<?php

namespace App\Http\Controllers;

use App\Models\HastagProduct;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductDetailController extends Controller
{
    function showDetail($id){
        $productDetail = Products::findOrFail($id);
        $getAllProduct = Products::all();
        $getAllHastag = HastagProduct::all();
        $hastagOfProduct = HastagProduct::where('product_id', $id)->get();

        return view('product-detail', compact('productDetail','hastagOfProduct','getAllHastag','getAllProduct'));
    }
}
