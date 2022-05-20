<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order') }}
        </h2>
        <div style="margin-top: 20px">
            <x-nav-link :href="route('boxOrder.crudOrder')" :active="request()->routeIs('boxProducts.crudProducts')"
                style="margin: 10px">
                {{ __('Orders') }}
            </x-nav-link>
            <x-nav-link :href="route('boxOrder.addOrder')" :active="request()->routeIs('boxProducts.addProduct')"
                style="margin: 10px">
                {{ __('Add Order') }}
            </x-nav-link>


        </div>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <div class="container">
        <b>
            <h2 class="title text-center">Quan ly Order</h2>
        </b>
        <table class="table table-bordered">
            <thead>
            @if(Session::has('thongbao'))
                <div class="alert alert-success">
                    {{Session::get('thongbao')}}
                </div>
                @endif
                <tr>
                    <th>User_id</th>
                    <th>yourCart_id</th>
                    <th>coupon_code</th>
                    <th>address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order as $value)
                <tr>
                    <td>{{$value->user_id}}</td>
                    <td>{{$value->yourCart_id}}</td>
                    <td>{{$value->coupon_code}}</td>
                    <td>{{$value->address}}</td>
                    <td>
                        <a href="
                        {{ url('/order-crud/delete',['user_id'=>$value->user_id]) }}
                        " class="btn btn-danger">DELETE</a>
                        <a href="
                        {{ route('boxOrder.edit',$value->user_id) }}
                        " class="btn btn-success">EDIT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$order->links()}}
    </div>

</x-app-layout>