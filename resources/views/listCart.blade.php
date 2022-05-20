<div class="col-lg-8 col-xl-12  m-b-50 ">
    <div class="m-l-25 m-r--38 m-lr-0-xl">
        <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
                <tr class="table_head">
                    <th class="column-1 text-left">Product</th>
                    <th class="column-2 text-center"></th>
                    <th class="column-3 text-center">Price</th>
                    <th class="column-4 text-center">Quantity</th>
                    <th class="column-5 text-center">Total</th>
                    <th class="column-4 text-center">Save</th>
                    <th class="column-5 text-right">Delete</th>
                </tr>
                <tr class="table_head">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="column-7 text-center edit-all"><a href="#"><i class="fa fa-floppy-o"></i> All</a></th>
                    <th class="column-6 text-center del-all"><a href="#"><i class="fa fa-minus-circle"></i> All</a></th>
                </tr>
                @if(Session::has('cart') != null)
                    @foreach(Session::get('cart')->products as $item)
                        <tr class="table_row">
                            <td class="column-1 text-center col-md-1">
                                <div class="how-itemcart1">
                                    <img src="{{ asset('images/'.$item['productInfo']->picture_Product) }}" alt="IMG">
                                </div>
                            </td>
                            <td class="column-2 text-left col-md-2"> {{$item['productInfo']->name_Product}}</td>
                            <td class="column-3 text-center col-md-2">$ {{$item['productInfo']->price_Product}}</td>
                            <td class="column-4 text-center col-md-3">
                                <input data-id="{{$item['productInfo']->id}}" id="qty-item-{{$item['productInfo']->id}}" type="number" min='1' class="form-control" value="{{$item['quantity']}}" oninput="this.value = !!this.value && Math.abs(this.value) > 0 ? Math.abs(this.value) : 1">
                            </td>
                            <td class="total-price column-5 text-center col-md-2">$ {{$item['price']}}</td>
                            <td class="column-7 text-center col-md-1"><a href="#"><i class="fa fa-floppy-o" aria-hidden="true" onclick="SaveListItemCart(<?php echo $item['productInfo']->id; ?>)"></i></a></td>
                            <td class="column-6 text-center col-md-1"><a href="#"><i class="fa fa-minus-circle" aria-hidden="true" onclick="DelListItemCart(<?php echo $item['productInfo']->id; ?>)"></i></a></td>


                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
</div>

<div class="col-sm-4 col-lg-4 col-xl-5 m-lr-auto m-b-50">
    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
        <h4 class="mtext-109 cl2 p-b-30">
            Cart Totals
        </h4>

        <div class="flex-w flex-t bor12 p-b-13">
            <div class="size-208">
                <span class="stext-110 cl2">
                    Total qty:
                </span>
            </div>

            <div class="size-209">
                <span class="mtext-110 cl2">
                    @if(Session::has('cart') != null)
                        {{Session::get('cart')->totalQuantity}}
                    @else
                        0
                    @endif
                </span>
            </div>
        </div>

        <div class="flex-w flex-t p-t-27 p-b-33">
            <div class="size-208">
                <span class="mtext-101 cl2">
                    Total Price:
                </span>
            </div>

            <div class="size-209 p-t-1">
                <span class="mtext-110 cl2">
                    @if(Session::has('cart') != null)
                        $ {{Session::get('cart')->totalPrice}}
                    @else
                        $ 0
                    @endif
                </span>
            </div>
        </div>

        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
            Proceed to Checkout
        </button>
    </div>
</div>
