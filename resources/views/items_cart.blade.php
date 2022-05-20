@if(Session::has('cart') != null)
    @foreach(Session::get('cart')->products as $item)
        <li class="header-cart-item flex-w flex-t m-b-12  del-item">
            <div data-id="{{$item['productInfo']->id}}" class="header-cart-item-img">
                <img src="{{ asset('images/'.$item['productInfo']->picture_Product) }}" alt="IMG">
            </div>

            <div class="header-cart-item-txt p-t-8">
                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                    {{$item['productInfo']->name_Product}}
                </a>

                <span class="header-cart-item-info">
                {{$item['quantity']}} x $ {{$item['productInfo']->price_Product}}
            </span>
            </div>
        </li>
    @endforeach
    <li class="header-cart-item flex-w flex-t m-b-12">
        <div class="header-cart-total w-full p-tb-40">
            Total: $ {{Session::get('cart')->totalPrice}}
        </div>

        <input hidden id="total-quantity-cart" type="number"value="{{Session::get('cart')->totalQuantity}}">
    </li>
@endif
