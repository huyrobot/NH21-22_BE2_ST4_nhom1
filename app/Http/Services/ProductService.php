<?php

namespace App\Http\Services;
use App\Models\Products;
use Illuminate\Support\Facades\Session;
use Faker\Provider\File;

class ProductService
{
    public function getAll(){
        //$brands = Products::simplePaginate(10);
        return Products::paginate(6);
    }
    public function create($request){

        try {
//            $request->except('_token');
//            dd($request->all());
//            Products::create($request->all());
//        $products = new Products();
//        if($request->hasFile('picture_Product')){
//            $file = $request->file('picture_Product');
//            $ext = $file->getClientOriginalExtension();
//            $filename = time().'.'.$ext;
//            $file->move('public/images/products',$filename);
//            $products->picture_Product =$filename;
//        }
//        $products->name_Product = $request->input('name_Product');
//        $products->price_Product = $request->input('price_Product');
//        $products->size_Product = $request->input('size_Product');
//        $products->color_Product = $request->input('color_Product');
//        $products->weight_Product = $request->input('weight_Product');
//        $products->dimensisons_Product = $request->input('dimensisons_Product');
//        $products->materials_Product = $request->input('materials_Product');
//        $products->description_Product = $request->input('description_Product');

            Products::create([
                "name_Product" => (string) $request->input('tenSP'),
                "price_Product" => (string) $request->input('giaSP'),
                "size_Product" => (string) $request->input('size'),
                "color_Product" => (string) $request->input('color'),
                "weight_Product" => (string) $request->input('khoiLuong').' kg',
                "dimensisons_Product" => (string) $request->input('tyLe'),
                "materials_Product" => (string) $request->input('chatLieu'),
                "description_Product" => (string) $request->input('moTa'),
                "picture_Product" => $request->file('picture_Product')->getClientOriginalName(),
            ]);
            Session::flash('success','Add successful product');

        }catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
    }
    public function update($request, $product){

        try {
            $product->fill($request->input());
            $product->save();
            Session::flash('success','Update succesfully');

        }catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
    }
    public function destroy($request)
    {
        $id = (int)$request->input('id');
        $product = Products::where('id', $id)->first();
        if ($product) {
            return Products::where('id', $id)->delete();
        }

        return false;
    }

}
