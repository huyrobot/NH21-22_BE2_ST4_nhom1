@extends('layout')
@section('content')


<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{ asset('index.html') }}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Check out
        </span>
    </div>
</div>

<!-- check out -->
<div class="container my-5">
    <form>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label for="">First Name</label>
                                <input type="text" class="form-control fname" name="fname" placeholder="Enter First Name" value="<?php echo session('account')[0]->name ; ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control lname" name="lname" placeholder="Enter Last Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="text" class="form-control email " name="email" placeholder="Enter Email" value="<?php echo session('account')[0]->email; ?>" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control phone" name="phone" placeholder="Enter Phone Number" value="<?php echo session('account')[0]->phone ; ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Address</label>
                                <input type="text" class="form-control address" name="address" placeholder="Enter Address" value="<?php echo session('account')[0]->address ; ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">City</label>
                                <input type="text" class="form-control city" name="city" placeholder="Enter City" value="<?php echo session('account')[0]->city ; ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        Order Details
                        <hr>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::has('cart') != null)
                                @foreach(Session::get('cart')->products as $item)
                                <tr>
                                    <td> {{$item['productInfo']->name_Product}}</td>
                                    <td class="text-center">
                                        <input data-price="{{$item['productInfo']->price_Product}}" data-id="{{$item['productInfo']->id}}" data-qty="{{$item['quantity']}}" type="hidden">
                                        {{$item['quantity']}}
                                    </td>
                                    <td> $ {{$item['productInfo']->price_Product}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <hr>
                        <!-- total price -->
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
                        <hr>
                        <a href="#" class="btn btn-primary btn-lg btn-block  <?php if( session('cart') != null){echo 'PlaceOrder';}else {echo 'disabled';} ?> " > Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Footer -->
@endsection
