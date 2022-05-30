<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderService;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    protected $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function showlistOrder(){
        return view('admin.listmenu.listOrder',[
            'title' => 'List Order',
            'title2' => 'List',
            'order' => $this->orderService->getAll(),
        ]);
    }
    public function confirm($id){
        $order = Order::find($id);
        //dd($hastag);
        $state = DB::table('orders')->where('id', $id)->value('state');
        if($state == 'complete'){
            DB::Table('orders')->where('id',$id)
                ->update(['state'=>'not complete',
                ]);
            Session::flash('success','Confirm Order successfully');
        }
        else{
            DB::Table('orders')->where('id',$id)
                ->update(['state'=>'complete',
                ]);
            Session::flash('success','Confirm Order successfully');
        }



        return redirect('admin/menus/listOrder');
    }
}
