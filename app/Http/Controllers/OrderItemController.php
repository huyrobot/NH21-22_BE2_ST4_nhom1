<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderItemService;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\Quotation;
class OrderItemController extends Controller
{
    protected $orderItemService;
    public function __construct(OrderItemService $orderItemService)
    {
        $this->orderItemService = $orderItemService;
    }
    public function showOrderItem($id){

//        $order = DB::table('order_items')->where('order_id', $id)->get();
//dd($order);
        return view('admin.listmenu.orderItem',[
            'title' => 'Order Item',
            'title2' => 'List',
            'orderItem' => $this->orderItemService->getOrderItem($id),
        ]);
    }
}
