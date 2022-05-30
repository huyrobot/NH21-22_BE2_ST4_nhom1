<?php

namespace App\Http\Services;
use App\Models\HastagProduct;
use Illuminate\Support\Facades\Session;

class HastagProductService
{
    public function getAll(){
        return HastagProduct::paginate(10);
    }
    public function create($request){
        try {
            //dd($request);
            HastagProduct::create([
                "product_id" => (string) $request->input('productID'),
                "hastag_product" => (string) $request->input('hastagName'),
            ]);
            Session::flash('success','Add Hastag successfully');
        }catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
    }
}
