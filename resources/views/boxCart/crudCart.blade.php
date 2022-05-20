<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carts') }}
        </h2>
        <div style="margin-top: 20px">
        <x-nav-link :href="route('boxCart.crudCart')" :active="request()->routeIs('boxProducts.crudProducts')"
                style="margin: 10px">
                {{ __('Carts') }}
            </x-nav-link>
            <x-nav-link :href="route('boxCart.addCart')" :active="request()->routeIs('boxProducts.addProduct')"
                style="margin: 10px">
                {{ __('Add Cart') }}
            </x-nav-link>

        </div>

    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <div class="container">
        <b>
            <h2 class="title text-center">Quan ly Cart</h2>
        </b>
        <table class="table table-bordered">
            <thead>
                @if(Session::has('thongbao'))
                <div class="alert alert-success">
                    {{Session::get('thongbao')}}
                </div>
                @endif
                <tr>
                    <th>id</th>
                    <th>user_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->user_id}}</td>
                    <td>
                        <a href="
                    {{ url('/cart-crud/delete',['id'=>$value->id]) }}
                    " class="btn btn-danger">DELETE</a>
                        <a href="
                    {{ route('boxCart.edit',$value->id) }}
                    " class="btn btn-success">EDIT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$cart->links()}}
    </div>
   
</x-app-layout>
