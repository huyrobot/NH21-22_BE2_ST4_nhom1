<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <div style="margin-top: 20px">
            <x-nav-link :href="route('boxProducts.crudProducts')"
                :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('Products') }}
            </x-nav-link>
            <x-nav-link :href="route('boxProducts.addProduct')" :active="request()->routeIs('boxProducts.addProduct')"
                style="margin: 10px">
                {{ __('Add Product') }}
            </x-nav-link>

        </div>

    </x-slot>
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div  class="p-6 bg-white border-b border-gray-200">
                    <table   class="table table-striped" >
                        <thead >
                        @if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                        @endif
                        <tr style="text-align: center" style="font-size: 15px">
                            <th>ID</th>
                            <th width="100px">Picture</th>
                            <th style="">Product</th>
                            <th>Price</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Weight</th>
                            <th>Dimensisons</th>
                            <th>Materials</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody style="text-align: center;">
                        @foreach($product as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td><img src="{{ asset( 'images/'.$value->picture_Product )}}"></td>
                                <td>{{$value->name_Product}}</td>
                                <td>{{$value->price_Product}}</td>
                                <td>{{substr($value->size_Product,0,50)}}</td>
                                <td>{{substr($value->color_Product,0,50)}}</td>
                                <td>{{$value->weight_Product}}</td>
                                <td>{{substr($value->dimensisons_Product,0,9)}}</td>
                                <td>{{$value->materials_Product,0,50}}</td>
                                <td>{{substr($value->description_Product,0,40)}}...</td>
                                <td>
                                    <div style="display: flex">
                                        <a style="padding-right: 25px;padding-left: 25px" href=" {{ route('boxProducts.edit',$value->id) }} " class="btn btn-success" >EDIT</a>
                                        <a style="margin-left: 10px" href="{{ url('/products-crud/delete',['id'=>$value->id]) }}" class="btn btn-danger">DELETE</a>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$product->links()}}
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
