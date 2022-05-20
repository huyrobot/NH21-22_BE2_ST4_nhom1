<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function getOrder()
    {
        $order = Order::paginate(5);
        return view('boxOrder.crudOrder',compact('order'))
        ->with('i',(request()->input('page',1) -1 * 5));
    }
    public function add()
    {
        return view('boxOrder.addOrder');
    }
    public function save(Request $request)
    {
       $user_id = $request->get('user_id');
       $yourCart_id = $request->get('yourCart_id');
       $coupon_code = $request->get('coupon_code');
       $address = $request->get('address');
    
       Order::create([
           'user_id'=> $user_id,
           'yourCart_id'=>$yourCart_id,
           'coupon_code'=> $coupon_code,
           'address'=>$address,
       ]);

       return redirect()->route('boxOrder.crudOrder')
       ->with('thongbao','Them thanh cong!');
    }

    public function delete($user_id)
    {
        $value = Order::findOrFail($user_id);
        $value->delete();
        return redirect()->route('boxOrder.crudOrder')
        ->with('thongbao','Xoa thanh cong!');
    }
    public function edit($user_id)
    {
        $value = Order::findOrFail($user_id);
        return  view('/boxOrder/editOrder',['value'=>$value]);
    }
    public function update(Request $request,$user_id)
    {
        $value = Order::findOrFail($user_id);
        $value->update([
            'yourCart_id'=>$request->get('yourCart_id'),
            'coupon_code'=>$request->get('coupon_code'),
            'address'=>$request->get('address'),
        ]);
        return redirect()->route('boxOrder.crudOrder')
        ->with('thongbao','Sua thanh cong!');
    }
}
