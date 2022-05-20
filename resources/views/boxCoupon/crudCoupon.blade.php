<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coupons') }}
        </h2>
        <div style="margin-top: 20px">
        <x-nav-link :href="route('boxCoupon.crudCoupon')" :active="request()->routeIs('boxProducts.crudProducts')"
                style="margin: 10px">
                {{ __('Coupons') }}
            </x-nav-link>
            <x-nav-link :href="route('boxCoupon.addCoupon')" :active="request()->routeIs('boxProducts.addProduct')"
                style="margin: 10px">
                {{ __('Add Coupon') }}
            </x-nav-link>


        </div>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <div class="container">
        <b>
            <h2 class="title text-center">Quan ly Blog</h2>
        </b>
        <table class="table table-bordered">
            <thead>
                @if(Session::has('thongbao'))
                <div class="alert alert-success">
                    {{Session::get('thongbao')}}
                </div>
                @endif
                <tr>
                    <th>Coupon_code</th>
                    <th>Value</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($coupon as $value)
                <tr>
                    <td>{{$value->coupon_code}}</td>
                    <td>{{$value->value}}</td>
                    <td>
                        <a href="
                        {{ url('/coupon-crud/delete',['coupon_code'=>$value->coupon_code]) }}
                        " class="btn btn-danger">DELETE</a>
                        <a href="
                        {{ route('boxCoupon.edit',$value->coupon_code) }}
                        " class="btn btn-success">EDIT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$coupon->links()}}
    </div>




</x-app-layout>