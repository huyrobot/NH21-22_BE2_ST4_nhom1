<?php

namespace App\Http\Services;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;
class CouponService
{

    public function create($request){
        try {
            Coupon::create([
                "coupon_code" => (string) $request->input('maGiamGia'),
                "value" => (int) $request->input('giaTri'),
            ]);
            Session::flash('success','Thêm Mã giảm giá thành công');
        }catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
    }

}
