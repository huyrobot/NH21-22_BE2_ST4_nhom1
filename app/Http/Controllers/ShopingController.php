<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class ShopingController extends Controller
{
    function shopFunction(){
        return view('shoping-cart');
    }
    public function AddCartHasNamePage(Request $request,$namePage,$id)
    {

        $product = Products::find($id);
        if ($product != null) {
            $oldCart = Session('cart') ?  Session('cart') : null; // cart current
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $request->session()->put('cart', $newCart);
        }
        return view('items_cart');
    }
    public function AddCart(Request $request,$id)
    {

        $product = Products::find($id);

        if ($product != null) {
            $oldCart = Session('cart') ?  Session('cart') : null; // cart current
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $request->session()->put('cart', $newCart);
        }
        return view('items_cart');
    }

    public function DeleteItemCart(Request $request, $id)
    {
        $oldCart = Session('cart') ?  Session('cart') : null; // cart current
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('cart', $newCart);
        } else {
            $request->Session()->forget('cart');
        }
        return view('items_cart');
    }

    public function DeleteItemCartHasNamePage(Request $request,$namePage,$id)
    {
        $oldCart = Session('cart') ?  Session('cart') : null; // cart current
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('cart', $newCart);
        } else {
            $request->Session()->forget('cart');
        }
        return view('items_cart');
    }

    public function DeleteListItemCart(Request $request, $id)
    {
        $oldCart = Session('cart') ?  Session('cart') : null; // cart current
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('cart', $newCart);
        } else {
            $request->Session()->forget('cart');
        }
        return view('listCart');
    }

    public function SaveListItemCart(Request $request, $id, $qty)
    {

        $oldCart = Session('cart') ?  Session('cart') : null; // cart current
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id, $qty);

        $request->Session()->put('cart', $newCart);

        return view('listCart');
    }

    public function SaveAllListItemCart(Request $request)
    {
        // $request->data la array data
        foreach ($request->data as $item) {
            $oldCart = Session('cart') ?  Session('cart') : null; // cart current
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($item['key'],$item['value']);
            $request->Session()->put('cart', $newCart);
        }
    }

    public function DelAllListItemCart(Request $request)
    {
        // $request->data la array data
        foreach ($request->data as $item) {
            $oldCart = Session('cart') ?  Session('cart') : null; // cart current
            $newCart = new Cart($oldCart);
            $newCart->DeleteItemCart($item['key']);

            if (Count($newCart->products) > 0) {
                $request->Session()->put('cart', $newCart);
            } else {
                $request->Session()->forget('cart');
            }
        }
    }
}
