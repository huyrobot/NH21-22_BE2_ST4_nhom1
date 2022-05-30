@extends('layout')
@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Blog
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        <!-- item blog -->
                        <div class="p-b-63">
                            @foreach($data1 as $value1)
                                <a href="{{ asset (url('/blog-detail/'.$value1->id)) }}" class="hov-img0 how-pos5-parent">
                                    <img src="{{ asset( 'images/'.$value1->picture_Blog )}}" alt="IMG-BLOG">
                                    <div class="flex-col-c-m size-123 bg9 how-pos5">
                                <span class="ltext-107 cl2 txt-center">
                                    {{substr($value1->time_blog,8,2)}}
                                </span>
                                        <span class="stext-109 cl3 txt-center">
                                    {{substr($value1->time_blog,0,7)}}
                                </span>
                                    </div>
                                </a>

                                <div class="p-t-32">
                                    <h4 class="p-b-15">
                                        <a href="{{ asset (url('/blog-detail/'.$value1->id)) }}"
                                           class="ltext-108 cl2 hov-cl1 trans-04">
                                            {{ $value1->title_blog}}
                                        </a>
                                    </h4>

                                    <p class="stext-117 cl6">
                                        {{ substr($value1->content_blog,0,500)." "."..."}}
                                    </p>

                                    <div class="flex-w flex-sb-m p-t-18">
                                <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">

                                </span>

                                        <a href="{{ asset (url('/blog-detail/'.$value1->id)) }}"
                                           class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                            Continue Reading

                                            <i class="fa fa-long-arrow-right m-l-9"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <!-- Pagination -->
                        <div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
                            @if(empty($search_blog))
                                {{ $data1->links() }}
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 p-b-80">
                    <form action="">
                        <div class="side-menu">
                            <div class="bor17 of-hidden pos-relative">
                                <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search-blog"
                                       placeholder="Search">

                                <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                    </form>
                </div>

                <div class="p-t-55">
                    <h4 class="mtext-112 cl2 p-b-33">
                        Categories
                    </h4>

                    <ul>
                        <li class="bor18">

                            @foreach($hastag_Products as $value_blog)
                                <a href="{{ asset (url('/product/'.$value_blog->hastag_product)) }}"
                                   class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                    {{ucfirst($value_blog->hastag_product)}}
                                </a>
                        </li>
                        @endforeach

                    </ul>
                </div>

                <div class="p-t-65">
                    <h4 class="mtext-112 cl2 p-b-33">
                        NEW Products
                    </h4>

                    <ul>

                        @foreach($products as $value)
                            <li class="flex-w flex-t p-b-30">

                                <a href="{{ asset (url('/product-detail/'.$value->id)) }}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                    <img src="{{ asset( 'images/'.$value->picture_Product )}}"
                                         style="height:150px; width:100px;" alt="PRODUCT">
                                </a>

                                <div class="size-215 flex-col-t p-t-8">
                                    <a href="{{ asset (url('/product-detail/'.$value->id)) }}" class="stext-116 cl8 hov-cl1 trans-04">
                                        {{$value->name_Product}}
                                    </a>

                                    <span class="stext-116 cl6 p-t-20">
                                {{"$".$value->price_Product}}
                            </span>
                                </div>

                            </li>
                        @endforeach

                    </ul>
                </div>



            </div>
        </div>
        </div>
        </div>
    </section>



    <!-- Footer -->
@endsection
