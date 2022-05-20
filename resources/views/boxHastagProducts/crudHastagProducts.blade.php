<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hastag Products') }}
        </h2>
        <div style="margin-top: 20px">
            <x-nav-link :href="route('boxHastagProducts.crudHastagProducts')"
                :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('Hastag Products') }}
            </x-nav-link>
            <x-nav-link :href="route('boxHastagProducts.addHastagProduct')"
                :active="request()->routeIs('boxProducts.addProduct')" style="margin: 10px">
                {{ __('Add Hastag Product') }}
            </x-nav-link>


        </div>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <div class="container">
        <b>
            <h2 class="title text-center">Quan ly San Pham</h2>
        </b>
        <table class="table table-bordered">
            <thead>
            @if(Session::has('thongbao'))
                <div class="alert alert-success">
                    {{Session::get('thongbao')}}
                </div>
                @endif
                <tr>
                    <th>product_id</th>
                    <th>hastag_product</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hastagProduct as $value)
                <tr>
                    <td>{{$value->product_id}}</td>
                    <td>{{$value->hastag_product}}</td>

                    <td>
                        <a href="
                        {{ url('/hastagproducts/delete',['product_id'=>$value->product_id]) }}
                        " class="btn btn-danger">DELETE</a>
                        <a href="
                        {{ route('boxHastagProducts.edit', $value->product_id ) }}
                        " class="btn btn-success">EDIT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$hastagProduct->links()}}
    </div>



</x-app-layout>