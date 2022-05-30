<?php

namespace App\Http\Services;
use App\Models\HastagBlog;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use DB;
use App\Quotation;
class OrderItemService
{
    public function getOrderItem($id){
        //return OrderItem::paginate(10);
        //$order = OrderItem::all();

        $order = DB::table('order_items')->where('order_id', $id)->get();


        //var_dump($user->name);

        //$order = $order->find($id);
        return $order;
        //$user = $users->find(1);
    }

}
