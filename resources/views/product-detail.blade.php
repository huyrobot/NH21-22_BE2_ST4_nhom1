@extends('layout')
@section('content')

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{ url('/') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            @foreach($hastagOfProduct as $row)
                <a href="{{ asset (url('/product/'.$row->hastag_product)) }}" class="stext-109 cl8 hov-cl1 trans-04">
                    {{$row->hastag_product}}
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>
            @endforeach

            <span class="stext-109 cl4">
            {{$productDetail->name_Product}}
        </span>
        </div>
    </div>


    <!-- Product Detail -->
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">


                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="images/{{$productDetail->picture_Product}}">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{ asset( 'images/'.$productDetail->picture_Product )}}" alt="IMG-PRODUCT">

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{$productDetail->name_Product}}
                        </h4>

                        <span class="mtext-106 cl2">
                        ${{$productDetail->price_Product}}
                    </span>

                        <p class="stext-102 cl3 p-t-23">
                            {{$productDetail->description_Product}}
                        </p>

                        <!--  -->
                        <div class="p-t-33">
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Size:
                                </div>

                                <div class="size-204 respon6-next">
                                    {{$productDetail->size_Product}}
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color:
                                </div>

                                <div class="size-204 respon6-next">
                                    {{$productDetail->color_Product}}
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">

                                    <a class="js-addcart-detail" onclick="AddCart(<?php echo $productDetail->id; ?>)" href="javascript:">
                                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 ">
                                            Add to cart
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">


                        </div>
                    </div>
                </div>
            </div>



            <div class="bor10 m-t-50 p-t-43 p-b-40">
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item p-b-10">
                            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                        </li>

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
                        </li>

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Comments</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-t-43">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <div class="how-pos2 p-lr-15-md">
                                <p class="stext-102 cl6">
                                    {{$productDetail->description_Product}}
                                </p>
                            </div>
                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="information" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <ul class="p-lr-28 p-lr-15-sm">
                                        <li class="flex-w flex-t p-b-7">
                                        <span class="stext-102 cl3 size-205">
                                            Weight
                                        </span>

                                            <span class="stext-102 cl6 size-206">
                                            {{$productDetail->weight_Product}}
                                        </span>
                                        </li>

                                        <li class="flex-w flex-t p-b-7">
                                        <span class="stext-102 cl3 size-205">
                                            Dimensions
                                        </span>

                                            <span class="stext-102 cl6 size-206">
                                            {{$productDetail->dimensisons_Product}}
                                        </span>
                                        </li>

                                        <li class="flex-w flex-t p-b-7">
                                        <span class="stext-102 cl3 size-205">
                                            Materials
                                        </span>

                                            <span class="stext-102 cl6 size-206">
                                            {{$productDetail->materials_Product}}
                                        </span>
                                        </li>

                                        <li class="flex-w flex-t p-b-7">
                                        <span class="stext-102 cl3 size-205">
                                            Color
                                        </span>

                                            <span class="stext-102 cl6 size-206">
                                            {{$productDetail->color_Product}}
                                        </span>
                                        </li>

                                        <li class="flex-w flex-t p-b-7">
                                        <span class="stext-102 cl3 size-205">
                                            Size
                                        </span>

                                            <span class="stext-102 cl6 size-206">
                                            {{$productDetail->size_Product}}
                                        </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <div class="p-b-30 m-lr-15-sm">
                                        <!-- Review -->
                                        <form action="#">
                                            @csrf
                                            <div id="comment_show"></div>
                                        </form>


                                        <!-- Add review -->
                                        <form class="w-full" action="#">
                                            <h5 class="mtext-108 cl2 p-b-7">
                                                Add a Comment
                                            </h5>

                                            <div class="row p-b-25">
                                                <div class="col-12 p-b-5">
                                                    <label class="stext-102 cl3" for="review">Your Comment</label>
                                                    <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10 comment_content" id="review" name="review" placeholder="Enter comments.." ></textarea>
                                                </div>

                                                <div class="col-sm-6 p-b-5">
                                                    <input type="hidden" class="prod_id" value="{{$productDetail->id}}">
                                                    <label class="stext-102 cl3" for="name">Email Name</label>
                                                    <input class="size-111 bor8 stext-102 cl2 p-lr-20 comment_email" id="name" type="text" name="name" value="<?php if(session('account') != null) { echo session('account')[0]->email; } ?>">
                                                </div>

                                            </div>

                                            <a class="text-light flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10 <?php if(session('account')!=null) {
                                            echo 'send_comment';
                                        }else {echo 'disabled';}  ?>">
                                                Submit
                                            </a>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
        <span class="stext-107 cl6 p-lr-25">
            SKU: JAK-01
        </span>

            <span class="stext-107 cl6 p-lr-25">
            Categories: @foreach($hastagOfProduct as $row) {{$row->hastag_product}} @endforeach
        </span>
        </div>
    </section>


    <!-- Related Products -->
    <section class="sec-relate-product bg0 p-t-45 p-b-105">
        <div class="container">
            <div class="p-b-45">
                <h3 class="ltext-106 cl5 txt-center">
                    Related Products
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    <?php
                    foreach ($getAllProduct as $product) :
                    foreach ($getAllHastag as $hastag) :
                    foreach ($hastagOfProduct as $hastagOfproduct) :
                    if ($hastagOfproduct['hastag_product'] == $hastag['hastag_product'] && $hastagOfproduct['product_id'] != $hastag['product_id'] && $hastag['product_id'] == $product['id']) :
                    ?>
                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{ asset('images/'.$product->picture_Product) }}" alt="IMG-PRODUCT">


                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="{{ asset (url('/product-detail/'.$product->id)) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $product->name_Product}}
                                    </a>

                                    <span class="stext-105 cl3">
                                                    ${{ $product->price_Product}}
                                                </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                    endif;
                    endforeach;
                    endforeach;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
@endsection
