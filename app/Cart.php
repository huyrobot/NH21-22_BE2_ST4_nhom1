<?php
namespace App;
class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart)
    {
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }

    public function AddCart($product, $id)
    {
        $newProduct = ['quantity' => 0, 'price' => $product->price_Product ,'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products))//ham nay ktra key truyen vo
            {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->price_Product;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price_Product;
        $this->totalQuantity++;
    }
    public function DeleteItemCart($id)
    {
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -=  $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function UpdateItemCart($id,$qty)
    {
        //xoa het qty va total price
        $this->totalQuantity  -= $this->products[$id]['quantity'];
        $this->totalPrice  -= $this->products[$id]['price'];

        //cap nhat qty va price moi
        $this->products[$id]['quantity'] = $qty;
        $this->products[$id]['price'] = $qty * $this->products[$id]['productInfo']->price_Product;

        //cap nhat gio hang
        $this->totalQuantity  += $this->products[$id]['quantity'];
        $this->totalPrice  += $this->products[$id]['price'];
    }
}
?>
