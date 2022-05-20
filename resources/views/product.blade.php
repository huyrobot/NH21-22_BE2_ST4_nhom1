@extends('layout')
@section('content')

    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <a href="{{ asset (url('/product')) }}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5  <?php if(strstr( url()->current(), 'product' ) == 'product'  ){echo 'how-active1'; }else{ echo '';} ?>" data-filter="*">
                        All Products
                    </a>

                    @foreach($getHastag as $row)

                        <a href="{{ asset (url('/product/'.$row->hastag_product)) }}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 <?php if(strstr( url()->current(), $row->hastag_product ) == $row->hastag_product){echo 'how-active1'; }else{ echo '';} ?>" data-filter=".{{$row->hastag_product}}">
                            {{$row->hastag_product}}
                        </a>
                    @endforeach

                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Filter
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <form action="">
                        <div class="bor8 dis-flex p-l-15">
                            <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                                <i class="zmdi zmdi-search"></i>
                            </button>

                            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="search" name="search-product" placeholder="Search">
                        </div>
                    </form>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="{{ url()->current() }}" class="filter-link stext-106 trans-04">
                                        All
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url()->current().'?sort=price_asc' }}" class="filter-link stext-106 trans-04">
                                        Price: Low to High
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url()->current().'?sort=price_desc' }}" class="filter-link stext-106 trans-04">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Price
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="{{ url()->current() }}" class="filter-link stext-106 trans-04 ">
                                        All
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url()->current().'?sort=0den50' }}" class="filter-link stext-106 trans-04">
                                        $0.00 - $50.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url()->current().'?sort=50den100' }}" class="filter-link stext-106 trans-04">
                                        $50.00 - $100.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url()->current().'?sort=100den150' }}" class="filter-link stext-106 trans-04">
                                        $100.00 - $150.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url()->current().'?sort=150den200' }}" class="filter-link stext-106 trans-04">
                                        $150.00 - $200.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url()->current().'?sort=lon200' }}" class="filter-link stext-106 trans-04">
                                        $200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col3 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Color
                            </div>

                            <ul>
                                <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                    <a href="{{ url()->current().'?sortCol=Black' }}" class="filter-link stext-106 trans-04">
                                        Black
                                    </a>
                                </li>

                                <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                    <a href="{{ url()->current().'?sortCol=Blue' }}" class="filter-link stext-106 trans-04">
                                        Blue
                                    </a>
                                </li>

                                <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                    <a href="{{ url()->current().'?sortCol=Gray' }}" class="filter-link stext-106 trans-04">
                                        Gray
                                    </a>
                                </li>

                                <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                    <a href="{{ url()->current().'?sortCol=Green' }}" class="filter-link stext-106 trans-04">
                                        Green
                                    </a>
                                </li>

                                <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                    <a href="{{ url()->current().'?sortCol=Red' }}" class="filter-link stext-106 trans-04">
                                        Red
                                    </a>
                                </li>

                                <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                                    <i class="zmdi zmdi-circle-o"></i>
                                </span>

                                    <a href="{{ url()->current().'?sortCol=White' }}" class="filter-link stext-106 trans-04">
                                        White
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                @foreach($getAllProduct as $value)
                    @if(isset($getProbyHastag))
                        @foreach($getProbyHastag as $row)
                            @if($value->id == $row->product_id)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $row->hastag_product }}">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="{{ asset( 'images/'.$value->picture_Product )}}" style="height:350px; width:300px;" alt="IMG-PRODUCT">

                                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 " data-toggle="modal" data-target="#modal_{{$value->id}}">
                                                Quick View
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="{{ asset (url('/product-detail/'.$value->id)) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    {{ $value->name_Product}}
                                                </a>

                                                <span class="stext-105 cl3">
                                ${{ $value->price_Product}}
                            </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04" src="{{ asset( 'images/icons/icon-heart-01.png' )}}" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('images/icons/icon-heart-02.png')}}" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modal_{{$value->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                                                        <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                                                            <img src="images/icons/icon-close.png" alt="CLOSE" data-dismiss="modal">
                                                        </button>

                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-7 p-b-30">
                                                                <div class="p-l-25 p-r-30 p-lr-0-lg">
                                                                    <div class="wrap-slick3 flex-sb flex-w">

                                                                        <div class="wrap-pic-w pos-relative">
                                                                            <img src="{{ asset('images/'.$value->picture_Product) }}" alt="IMG-PRODUCT">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 col-lg-5 p-b-30">
                                                                <div class="p-r-50 p-t-5 p-lr-0-lg">
                                                                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                                                        {{ $value->name_Product}}
                                                                    </h4>

                                                                    <span class="mtext-106 cl2">
                                                    ${{ $value->price_Product}}
                                                </span>

                                                                    <p class="stext-102 cl3 p-t-23">
                                                                        {{ substr($value->description_Product,0,100)}} <a href="{{ asset (url('/product-detail/'.$value->id)) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">[...]</a>
                                                                    </p>

                                                                    <!--  -->
                                                                    <div class="p-t-33">
                                                                        <div class="flex-w flex-r-m p-b-10">
                                                                            <div class="size-203 flex-c-m respon6">
                                                                                Size
                                                                            </div>

                                                                            <div class="size-204 respon6-next">
                                                                                {{$value->size_Product}}
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-w flex-r-m p-b-10">
                                                                            <div class="size-203 flex-c-m respon6">
                                                                                Color
                                                                            </div>

                                                                            <div class="size-204 respon6-next">
                                                                                {{$value->color_Product}}
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-w p-b-10 p-t-40">
                                                                            <div class="size-204 flex-w flex-m respon6-next">

                                                                                <a class="js-addcart-detail" onclick="AddCart(<?php echo $value->id; ?>)" href="javascript:">
                                                                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 ">
                                                                                        Add to cart
                                                                                    </button>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $row->hastag_product }}">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{ asset( 'images/'.$value->picture_Product )}}" style="height:350px; width:300px;" alt="IMG-PRODUCT">

                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 " data-toggle="modal" data-target="#modal_{{$value->id}}">
                                        Quick View
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="{{ asset (url('/product-detail/'.$value->id)) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{ $value->name_Product}}
                                        </a>

                                        <span class="stext-105 cl3">
                                ${{ $value->price_Product}}
                            </span>
                                    </div>

                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset( 'images/icons/icon-heart-01.png' )}}" alt="ICON">
                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('images/icons/icon-heart-02.png')}}" alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modal_{{$value->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                                                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                                                    <img src="images/icons/icon-close.png" alt="CLOSE" data-dismiss="modal">
                                                </button>

                                                <div class="row">
                                                    <div class="col-md-6 col-lg-7 p-b-30">
                                                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                                                            <div class="wrap-slick3 flex-sb flex-w">

                                                                <div class="wrap-pic-w pos-relative">
                                                                    <img src="{{ asset('images/'.$value->picture_Product) }}" alt="IMG-PRODUCT">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-lg-5 p-b-30">
                                                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                                                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                                                {{ $value->name_Product}}
                                                            </h4>

                                                            <span class="mtext-106 cl2">
                                                    ${{ $value->price_Product}}
                                                </span>

                                                            <p class="stext-102 cl3 p-t-23">
                                                                {{ substr($value->description_Product,0,100)}} <a href="{{ asset (url('/product-detail/'.$value->id)) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">[...]</a>
                                                            </p>

                                                            <!--  -->
                                                            <div class="p-t-33">
                                                                <div class="flex-w flex-r-m p-b-10">
                                                                    <div class="size-203 flex-c-m respon6">
                                                                        Size
                                                                    </div>

                                                                    <div class="size-204 respon6-next">
                                                                        {{$value->size_Product}}
                                                                    </div>
                                                                </div>

                                                                <div class="flex-w flex-r-m p-b-10">
                                                                    <div class="size-203 flex-c-m respon6">
                                                                        Color
                                                                    </div>

                                                                    <div class="size-204 respon6-next">
                                                                        {{$value->color_Product}}
                                                                    </div>
                                                                </div>

                                                                <div class="flex-w p-b-10 p-t-40">
                                                                    <div class="size-204 flex-w flex-m respon6-next">

                                                                        <a class="js-addcart-detail" onclick="AddCart(<?php echo $value->id; ?>)" href="javascript:">
                                                                            <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 ">
                                                                                Add to cart
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>



            @if(isset($search_product)||isset($filter_product) || isset($filterByCol))

            @else
                @if(isset($getProbyHastag))
                    {{ $getProbyHastag->links() }}
                @else
                    {{ $getAllProduct->links() }}
                @endif
            @endif
        </div>
    </div>


    <!-- Footer -->
@endsection
