<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HastagProduct;
class HastagProductController extends Controller
{
    public function getHastag()
    {
        $hastagProduct = HastagProduct::paginate(5);
        return view('boxHastagProducts.crudHastagProducts',compact('hastagProduct'))
        ->with('i',(request()->input('page',1) -1 * 5));
    }
    public function add()
    {
        return view('boxHastagProducts.addHastagProduct');
    }
    public function save(Request $request)
    {
       $product_id = $request->get('product_id');
       $hastag_product = $request->get('hastag_product');
      

       HastagProduct::create([
           'product_id'=> $product_id,
           'hastag_product'=>$hastag_product,
       ]);

       return redirect()->route('boxHastagProducts.crudHastagProducts')
       ->with('thongbao','Them thanh cong!');
    }

    public function delete($product_id)
    {
        $value = HastagProduct::findOrFail($product_id);
        $value->delete();
        return redirect()->route('boxHastagProducts.crudHastagProducts')
        ->with('thongbao','Xoa thanh cong!');
    }
    public function edit($product_id)
    {
        $value = HastagProduct::findOrFail($product_id);
        return  view('/boxHastagProducts/editHastagProduct',['value'=>$value]);
    }
    public function update(Request $request,$product_id)
    {
        $value = HastagProduct::findOrFail($product_id);
        $value->update([
            'hastag_product'=>$request->get('hastag_product'),
        ]);
        return redirect()->route('boxHastagProducts.crudHastagProducts')
        ->with('thongbao','Sua thanh cong!');
    }
}
