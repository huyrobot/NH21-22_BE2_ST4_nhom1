<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }
    public function placeorder(Request $request)
    {
        //order
        $order = new Order();
        $order->fname = $request->data[0]['fname'];
        $order->lname =$request->data[0]['lname'];
        $order->email = $request->data[0]['email'];
        $order->phone = $request->data[0]['phone'];
        $order->address = $request->data[0]['address'];
        $order->city = $request->data[0]['city'];
        $order->save();

        //list order
        foreach ($request->data as $item) {
           OrderItem::create([
                'order_id' => $order->id,
                'email' => $order->email,
                'prod_id' => $item['key'],
                'qty' => $item['qty'],
                'price' => $item['price'],
           ]);
        }

    }
}
