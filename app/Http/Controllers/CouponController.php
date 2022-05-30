<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\CouponRequest;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Http\Services\CouponService;

class CouponController extends Controller
{

    protected $couponService;
    public function __construct(CouponService $couponService)
    {
        $this->couponService = $couponService;
    }
    public function insertCoupon(){
        return view('admin.addmenu.insertCoupon',[
            'title' => 'Thêm Mã giảm giá',
            'title2' => 'Thêm dữ liệu',
        ]);
    }
    public function createCoupon(CouponRequest $request){
        $result = $this->couponService->create($request);
        return redirect()->back();
    }


}
