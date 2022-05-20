<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;
class WishlishController extends Controller
{
    public function getWishLish()
    {
        $wishLish = WishList::paginate(5);
        return view('boxWishList.crudWishList',compact('wishLish'))
        ->with('i',(request()->input('page',1) -1 * 5));
    }
    public function add()
    {
        return view('boxWishList.addWishLish');
    }
    public function save(Request $request)
    {
       $user_id = $request->get('user_id');
       $product_id = $request->get('product_id');
      
       WishList::create([
           'user_id'=> $user_id,
           'product_id'=>$product_id,
       ]);

       return redirect()->route('boxWishList.crudWishList')
       ->with('thongbao','Them thanh cong!');
    }

    public function delete($id)
    {
        $value = WishList::findOrFail($id);
        $value->delete();
        return redirect()->route('boxWishList.crudWishList')
        ->with('thongbao','Xoa thanh cong!');
    }
    public function edit($id)
    {
        $value = WishList::findOrFail($id);
        return  view('/boxWishList/editWishLish',['value'=>$value]);
    }
    public function update(Request $request,$id)
    {
        $value = WishList::findOrFail($id);
        $value->update([
            'product_id'=>$request->get('product_id'),
        ]);
        return redirect()->route('boxWishList.crudWishList')
        ->with('thongbao','Sua thanh cong!');
    }
}
