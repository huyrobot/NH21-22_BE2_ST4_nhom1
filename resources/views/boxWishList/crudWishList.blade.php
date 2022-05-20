<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wish List') }}
        </h2>
        <x-nav-link :href="route('boxWishList.crudWishList')" :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('WishLishs') }}
            </x-nav-link>
            <x-nav-link :href="route('boxWishList.addWishLish')" :active="request()->routeIs('boxProducts.addProduct')" style="margin: 10px">
                {{ __('Add WishLish') }}
            </x-nav-link>
    </x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <div class="container">
        <b>
            <h2 class="title text-center">Quan ly WishLish</h2>
        </b>
        <table class="table table-bordered">
            <thead>
            @if(Session::has('thongbao'))
                <div class="alert alert-success">
                    {{Session::get('thongbao')}}
                </div>
                @endif
                <tr>
                    <th>user_id</th>
                    <th>product_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wishLish as $value)
                <tr>
                    <td>{{$value->user_id}}</td>
                    <td>{{$value->product_id}}</td>
                    <td>
                        <a href="
                    {{ url('/wishlist-crud/delete',['user_id'=>$value->user_id]) }}
                    " class="btn btn-danger">DELETE</a>
                        <a href="
                    {{ route('boxWishList.edit',$value->user_id) }}
                    " class="btn btn-success">EDIT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$wishLish->links()}}
    </div>
</x-app-layout>
