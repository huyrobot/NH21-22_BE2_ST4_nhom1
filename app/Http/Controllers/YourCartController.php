<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YourCart;
class YourCartController extends Controller
{
    public function getCart()
    {
        $cart = YourCart::paginate(5);
        return view('boxCart.crudCart',compact('cart'))
        ->with('i',(request()->input('page',1) -1 * 5));
    }
    public function add()
    {
        return view('boxCart.addCart');
    }
    public function save(Request $request)
    {
       $id = $request->get('id');
       $user_id = $request->get('user_id');
      
       YourCart::create([
           'id'=> $id,
           'user_id'=>$user_id,
       ]);

       return redirect()->route('boxCart.crudCart')
       ->with('thongbao','Them thanh cong!');
    }

    public function delete($id)
    {
        $value = YourCart::findOrFail($id);
        $value->delete();
        return redirect()->route('boxCart.crudCart')
        ->with('thongbao','Xoa thanh cong!');
    }
    public function edit($id)
    {
        $value = YourCart::findOrFail($id);
        return  view('/boxCart/editCart',['value'=>$value]);
    }
    public function update(Request $request,$id)
    {
        $value = YourCart::findOrFail($id);
        $value->update([
            'user_id'=>$request->get('user_id'),
        ]);
        return redirect()->route('boxCart.crudCart')
        ->with('thongbao','Sua thanh cong!');
    }
}
