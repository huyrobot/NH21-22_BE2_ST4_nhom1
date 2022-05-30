@extends('layout')
@section('content')


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{ asset('/') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="{{ asset('/blog') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Blog
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
			{{$data1->title_blog}}
			</span>
        </div>
    </div>


    <!-- Content page -->
    <section class="bg0 p-t-52 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        <!--  -->
                        <div class="wrap-pic-w how-pos5-parent">
                            <img src="{{ asset( 'images/'.$data1->picture_Blog )}}" alt="IMG-BLOG">

                            <div class="flex-col-c-m size-123 bg9 how-pos5">
								<span class="ltext-107 cl2 txt-center">
								{{substr($data1->time_blog,8,2)}}
								</span>

                                <span class="stext-109 cl3 txt-center">
								{{substr($data1->time_blog,0,7)}}
								</span>
                            </div>
                        </div>

                        <div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By</span> Admin
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
								{{$data1->time_blog}}
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
								@foreach($hastagOfBlog as $value)
                                        {{$value -> hastag_blog}}
                                    @endforeach
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>
							</span>
                            <h4 class="ltext-109 cl2 p-b-28">
                                {{$data1->title_blog}}
                            </h4>

                            <p class="stext-117 cl6 p-b-26">
                                {{$data1->content_blog}}
                            </p>
                        </div>

                        <!--  -->

                    </div>
                </div>

                <div class="col-md-4 col-lg-3 p-b-80">
                    <div class="side-menu">
                        <div class="p-t-55">
                            <h4 class="mtext-112 cl2 p-b-33">
                                Categories
                            </h4>

                            <ul>
                                @foreach($hastag_products as $value)
                                    <li class="bor18">
                                        <a href="{{ asset (url('/product/'.$value->hastag_product)) }}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                            {{ucfirst($value->hastag_product)}}
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
                                                 style="height:150px; width:100px;"
                                                 alt="PRODUCT">
                                        </a>

                                        <div class="size-215 flex-col-t p-t-8">
                                            <a href="{{ asset (url('/product-detail/'.$value->id)) }}" class="stext-116 cl8 hov-cl1 trans-04">
                                                {{$value->name_Product}}
                                            </a>

                                            <span class="stext-116 cl6 p-t-20">
										{{$value->price_Product}}
										</span>
                                        </div>

                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="p-t-50">
                            <h4 class="mtext-112 cl2 p-b-27">
                                Tags
                            </h4>

                            <div class="flex-w m-r--5">
                                <div class="flex-w m-r--5">
                                    @foreach($hastagOfBlog as $value)
                                        <a class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                            {{$value -> hastag_blog}}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <!-- Footer -->
@endsection
