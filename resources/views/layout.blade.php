<?php
// Start the session
session_start();
$_SESSION["kiemTraDangNhap"] = 0;
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <title>Coza Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- thu vien add  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->
    <style>
        .whatsapp-chat {
            bottom: 10px;
            left: 10px;
            position: fixed;
        }
    </style>

</head>

<body class="animsition">

<!-- Header -->
<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">

                    <input type="hidden" id='account' value="{{ session('account') }}">
                    <p><a style="color: #ffff" href="tel:0987654321">Phone : 0987654321</a></p>
                </div>

                <div class="right-top-bar flex-w h-full">



                    <a style="color: #ffffff;" class="flex-c-m trans-04 p-lr-25">
                        @php
                            if (isset(Auth::user()->name) && (Auth::user()->name)!= null){
                            echo Auth::user()->name;
                            $_SESSION["kiemTraDangNhap"] = 1;
                            }
                            else{
                            echo 'My Account';
                            }
                        @endphp
                    </a>



                </div>

            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('images/icons/logo-01.png') }}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="">
                            <a href="{{ url('/') }}">Home</a>

                        </li>

                        <li class="label1 <?php if (strstr(url()->current(), 'product') == 'product') {
                                                    echo 'active-menu';
                                                } else {
                                                    echo '';
                                                } ?>" data-label1="hot">
                            <a href="{{ url('/product') }}">Products</a>
                        </li>

                        <li class="<?php if (strstr(url()->current(), 'shoping-cart') == 'shoping-cart') {
                                            echo 'active-menu';
                                        } else {
                                            echo '';
                                        } ?>">
                            <a href="{{ url('/shoping-cart') }}">Shoping Cart</a>
                        </li>

                        <li class="<?php if (strstr(url()->current(), 'blog') == 'blog') {
                                            echo 'active-menu';
                                        } else {
                                            echo '';
                                        } ?>">
                            <a href="{{ url('/blog') }}">Blog</a>
                        </li>

                        <li class="<?php if (strstr(url()->current(), 'about') == 'about') {
                                            echo 'active-menu';
                                        } else {
                                            echo '';
                                        } ?>">
                            <a href="{{ url('/about') }}">About</a>
                        </li>

                        <li class="<?php if (strstr(url()->current(), 'contact') == 'contact') {
                                            echo 'active-menu';
                                        } else {
                                            echo '';
                                        } ?>">
                            <a href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div style="display: flex;margin-top: 3%" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">
                        @if(Session::has('cart') != null)

                            <div style="margin-bottom: 20px;position: relative;">
                                <i style="font-size: 25px;;" class="zmdi zmdi-shopping-cart" aria-hidden="true"></i>
                                <span style="font-size: 13px;position: absolute; background-color: #717FE0;color: whitesmoke;padding-right: 3px; padding-left: 3px;margin-right: 20px" id="total-quantity-show">{{Session::get('cart')->totalQuantity}}</span>

                            </div>
                        @else
                            <div style="margin-bottom: 20px;position: relative;">
                                <i style="font-size: 25px;;" class="zmdi zmdi-shopping-cart" aria-hidden="true"></i>
                                <span style="font-size: 13px;position: absolute; background-color: #717FE0;color: whitesmoke;padding-right: 3px; padding-left: 3px;margin-right: 20px" id="total-quantity-show">0</span>

                            </div>

                        @endif
                    </div>

                    <div style="margin-left: 80px" class="btn-group">
                        <button type="button" class="btn btn-white  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i style="font-size: 25px; color: #333333" class="material-icons">account_circle</i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ asset('/admin/login') }}" class="dropdown-item " type="button">Login</a>
                            <a href="{{ url('/logout') }}" class="dropdown-item " type="button">Logout</a>

                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{ url('/') }}"><img src="{{ asset('images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div style="display: flex;margin-top: 3%" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">
                @if(Session::has('cart') != null)

                    <div style="position: relative;">
                        <i style="font-size: 25px;;" class="zmdi zmdi-shopping-cart" aria-hidden="true"></i>
                        <span style="font-size: 13px;position: absolute; background-color: #717FE0;color: whitesmoke;padding-right: 3px; padding-left: 3px;margin-right: 20px" id="total-quantity-show">{{Session::get('cart')->totalQuantity}}</span>

                    </div>
                @else
                    <div style="margin-bottom: 20px;position: relative;">
                        <i style="font-size: 25px;;" class="zmdi zmdi-shopping-cart" aria-hidden="true"></i>
                        <span style="font-size: 13px;position: absolute; background-color: #717FE0;color: whitesmoke;padding-right: 3px; padding-left: 3px;margin-right: 20px" id="total-quantity-show">0</span>

                    </div>

                @endif
            </div>



        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        @php
                            if (isset(Auth::user()->name)){
                            echo Auth::user()->name;
                            }
                            else{
                            echo 123;
                            }
                        @endphp
                    </a>

                    <a href="{{ asset('/admin/login') }}" class="flex-c-m p-lr-10 trans-04">
                        My Account
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>

                    <a href="{{ url('/') }}" class="flex-c-m p-lr-10 trans-04">
                        Logout
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="{{ url('/') }}">Home</a>


            </li>

            <li>
                <a href="{{ url('/product') }}">Shop</a>
            </li>

            <li>
                <a href="{{ url('/shoping-cart') }}" class="label1 rs1" data-label1="hot">Features</a>
            </li>

            <li>
                <a href="{{ url('/blog') }}">Blog</a>
            </li>

            <li>
                <a href="{{ url('/about') }}">About</a>
            </li>

            <li>
                <a href="{{ url('/contact') }}">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search-product" placeholder="Search...">
            </form>
        </div>
    </div>
</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            <ul class="header-cart-wrapitem w-full">
                <div id="change-item-cart">
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
                        </li>
                    @endif
                </div>
            </ul>

            <div class="w-full">
                <div class="header-cart-buttons flex-w w-full">
                    <a href="{{ url('/shoping-cart') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="<?php if(session('account')!=null) {
                                            echo url('/checkout');
                                        }else {echo url('/admin/login');}  ?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@yield('content')




<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Categories
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Women
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Men
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shoes
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Watches
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-4 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Contact
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Blog
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            About
                        </a>
                    </li>


                </ul>
            </div>

            <div class="col-sm-6 col-lg-4 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    GET IN TOUCH
                </h4>

                <p class="stext-107 cl7 size-201">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                </p>

                <div class="p-t-27">
                    <a class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a  class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </div>
            </div>


        </div>

        <div class="p-t-40">
            <div class="flex-c-m flex-w p-b-18">
                <a class="m-all-1">
                    <img src="{{ asset('images/icons/icon-pay-01.png') }}" alt="ICON-PAY">
                </a>

                <a class="m-all-1">
                    <img src="{{ asset('images/icons/icon-pay-02.png') }}" alt="ICON-PAY">
                </a>

                <a class="m-all-1">
                    <img src="{{ asset('images/icons/icon-pay-03.png') }}" alt="ICON-PAY">
                </a>

                <a class="m-all-1">
                    <img src="{{ asset('images/icons/icon-pay-04.png') }}" alt="ICON-PAY">
                </a>

                <a  class="m-all-1">
                    <img src="{{ asset('images/icons/icon-pay-05.png') }}" alt="ICON-PAY">
                </a>
            </div>

            <p class="stext-107 cl6 txt-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a  target="_blank">Colorlib</a> &amp; distributed by <a  target="_blank">ThemeWagon</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </p>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div style="bottom: 100px; right: 35px" class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
</div>

<!-- whatsapp chat -->
<div class="whatsapp-chat">
    <a  href="<?php if (session('account') != null) {
                        echo "https://wa.me/" . session('account')[0]->phone . "?text=I'm%20interested%20in%20your%20car%20for%20sale";
                    } ?>" target="_blank">
        <img style="width: 60px;height: 60px" src="{{ asset('images/Whatsapplogo.png') }}" alt="whatsapp-logo" height="80px" width="80px">
    </a>
</div>

<!--===============================================================================================-->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script>
    $(".js-select2").each(function() {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
<script>
    $('.js-addwish-b2').on('click', function(e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function() {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
    });
</script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script>
    $('.js-pscroll').each(function() {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function() {
            ps.update();
        })
    });
</script>

<!--===============================================================================================-->
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes') }}"></script>
<script src="{{ asset('js/map-custom.js') }}"></script>



<!-- thu vien mà t add  -->

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var account = document.querySelector('#account').value;
    if(account != ''){
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6289de2bb0d10b6f3e736c44/1g3l8nmpm';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    }

</script>
<!--End of Tawk.to Script-->

<!-- JavaScript -->
<script>
    //Add to cart
    function AddCart(id) {
        $.ajax({
            url: 'Add-Cart/' + id,
            type: 'GET',
        }).done(function(response) {
            RenderCart(response);
        });
    }

    //Del item cart
    $("#change-item-cart").on("click", ".del-item div", function() {
        $.ajax({
            url: 'Delete-Item-Cart/' + $(this).data("id"),
            type: 'GET',
        }).done(function(response) {
            RenderCart(response);
            alertify.success('Delete item success');
        });
    });

    function RenderCart(response) {

        if (response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            $("#total-quantity-show").text($("#total-quantity-cart").val());
        } else {
            $("#change-item-cart").empty();
            $("#total-quantity-show").text('0')
        }
    }
    //Del list item cart in shoping cart
    function DelListItemCart(id) {
        location.reload(true);
        $.ajax({
            url: 'Delete-Item-List-Cart/' + id,
            type: 'GET',
        }).done(function(response) {
            RenderListCart(response);
            alertify.success('Delete item success');
        });
    }

    //Save list item cart in shoping cart
    function SaveListItemCart(id) {
        //$("#qty-item-"+id).val() soluong cua input
        location.reload(); //load lai trang
        $.ajax({
            url: 'Save-Item-List-Cart/' + id + '/' + $("#qty-item-" + id).val(),
            type: 'GET',
        }).done(function(response) {
            RenderListCart(response);
            alertify.success('Save item success');
        });
    }

    //edit all cart in shoping cart
    $(".edit-all").on("click", function() {
        var lists = [];
        $("table tr td").each(function() {
            $(this).find("input").each(function() {
                var element = {
                    key: $(this).data('id'),
                    value: $(this).val()
                };
                lists.push(element);
            });
        });

        $.ajax({
            url: 'Save-All',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "data": lists
            }
        }).done(function(response) {
            location.reload(); //load lai trang
        });
        alertify.success('Save All success');
    });

    //Del all cart in shoping cart
    $(".del-all").on("click", function() {
        var lists = [];
        $("table tr td").each(function() {
            $(this).find("input").each(function() {
                var element = {
                    key: $(this).data('id')
                };
                lists.push(element);
            });
        });

        $.ajax({
            url: 'Del-All',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "data": lists
            }
        }).done(function(response) {
            location.reload(); //load lai trang
        });
        alertify.success('Delete All success');
    });


    //render list cart
    function RenderListCart(response) {

        $("#list-cart").empty();
        $("#list-cart").html(response);
        $("#total-quantity-show").text($("#total-quantity-cart").val());

    }

    //Check out
    $(".PlaceOrder").on("click", function() {

        if ($(".fname").val() != "" && $(".lname").val() != "" && $(".email").val() != "" && $(".phone").val() != "" && $(".address").val() != "" && $(".city").val() != "") {
            var lists = [];
            $("table tbody tr td").each(function() {
                $(this).find("input").each(function() {
                    var element = {
                        key: $(this).data('id'),
                        qty: $(this).data('qty'),
                        price: $(this).data('price'),
                        fname: $(".fname").val(),
                        lname: $(".lname").val(),
                        email: $(".email").val(),
                        phone: $(".phone").val(),
                        city: $(".city").val(),
                        address: $(".address").val(),
                    };
                    lists.push(element);
                });
            });

            $.ajax({
                url: "Place-Order",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "data": lists,
                }
            }).done(function() {
                alertify.success('Place order success');
            });
        } else {
            alertify.warning('One or more fields are available');
        }
    });

    //comment
    load_comment();
    function load_comment() {
        var prod_id = $('.prod_id').val();
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url:"{{ url('/load-comment') }}",
            method: "POST",
            data:{prod_id:prod_id,_token:_token},
            success:function(data){
                $('#comment_show').html(data);
            }
        });

    }
    $('.send_comment').click(function(){

        var prod_id = $('.prod_id').val();
        var comment_email = $('.comment_email').val();
        var comment_content = $('.comment_content').val();
        //alert(comment_content);
        var _token = $('input[name="_token"]').val();
        if(comment_content != "" && comment_email != ""){
            $.ajax({
                url:"{{ url('/send-comment') }}",
                method: "POST",
                data:{
                    prod_id:prod_id,
                    comment_content:comment_content,
                    comment_email:comment_email,
                    _token:_token
                },
                success:function(){
                    load_comment();
                    alertify.success('Comment success');
                }
            });
        }else{
            alertify.warning('One or more fields are available');
        }

    });
</script>

</body>

</html>
