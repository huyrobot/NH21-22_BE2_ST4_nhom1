<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductController extends Controller
{
    function productFunction(){
        return view('product');
    }
    public function getProduct()
    {
        $product = Products::paginate(5);
        return view('boxProducts.crudProducts',compact('product'))
        ->with('i',(request()->input('page',1) -1 * 5));
    }
    public function add()
    {
        return view('boxProducts.addProduct');
    }

    public function save(Request $request)
    {
       $picture_Product = $request->get('picture_Product');
       $name_Product = $request->get('name_Product');
       $price_Product = $request->get('price_Product');
       $size_Product = $request->get('size_Product');
       $color_Product = $request->get('color_Product');
       $weight_Product = $request->get('weight_Product');
       $dimensisons_Product = $request->get('dimensisons_Product');
       $materials_Product = $request->get('materials_Product');
       $description_Product = $request->get('description_Product');
       Products::create([
           'picture_Product'=> $picture_Product,
           'name_Product'=>$name_Product,
           'price_Product'=>$price_Product,
           'size_Product'=>$size_Product,
           'color_Product'=>$color_Product,
           'weight_Product'=>$weight_Product,
           'dimensisons_Product'=>$dimensisons_Product,
           'materials_Product'=>$materials_Product,
           'description_Product'=>$description_Product,
       ]);

       return redirect()->route('boxProducts.crudProducts')
       ->with('thongbao','Them thanh cong!');
    }

    public function delete($id)
    {
        $value = Products::findOrFail($id);
        $value->delete();
        return redirect()->route('boxProducts.crudProducts')
        ->with('thongbao','Xoa thanh cong!');
    }
    public function edit($id)
    {
        $value = Products::findOrFail($id);
        return  view('/boxProducts/editProduct',['value'=>$value]);
    }
    public function update(Request $request,$id)
    {
        $value = Products::findOrFail($id);
        $value->update([
            'picture_Product'=>$request->get('picture_Product'),
            'name_Product'=>$request->get('name_Product'),
            'price_Product'=>$request->get('price_Product'),
            'size_Product'=>$request->get('size_Product'),
            'color_Product'=>$request->get('color_Product'),
            'weight_Product'=>$request->get('weight_Product'),
            'dimensisons_Product'=>$request->get('dimensisons_Product'),
            'materials_Product'=>$request->get('materials_Product'),
            'description_Product'=>$request->get('description_Product'),
        ]);
        return redirect()->route('boxProducts.crudProducts')
        ->with('thongbao','Sua thanh cong!');
    }
}
