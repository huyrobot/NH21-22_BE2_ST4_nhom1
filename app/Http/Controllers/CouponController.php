<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
class CouponController extends Controller
{
    public function getCoupon()
    {
        $coupon = Coupon::paginate(5);
        return view('boxCoupon.crudCoupon',compact('coupon'))
        ->with('i',(request()->input('page',1) -1 * 5));;
    }
    public function add()
    {
        return view('boxCoupon.addCoupon');
    }
    public function save(Request $request)
    {
       $coupon_code = $request->get('coupon_code');
       $value = $request->get('value');
       Coupon::create([
           'coupon_code'=> $coupon_code,
           'value'=>$value,
       ]);

       return redirect()->route('boxCoupon.crudCoupon')
       ->with('thongbao','Them thanh cong!');
    }

    public function delete($coupon_code)
    {
        $value = Coupon::findOrFail($coupon_code);
        $value->delete();
        return redirect()->route('boxCoupon.crudCoupon')
        ->with('thongbao','Xoa thanh cong!');
    }    
    public function edit($id)
    {
        $value = Coupon::findOrFail($id);
        return  view('/boxCoupon/editCoupon',['value'=>$value]);
    }
    public function update(Request $request,$id)
    {
        $value = Coupon::findOrFail($id);
        
        $value->update([
            'value'=>$request->get('value'),
        ]);
        return redirect()->route('boxCoupon.crudCoupon')
        ->with('thongbao','Sua thanh cong!');
    }
}
