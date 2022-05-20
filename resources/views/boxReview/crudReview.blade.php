<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Review') }}
        </h2>
        <div style="margin-top: 20px">
            <x-nav-link :href="route('boxReview.crudReview')" :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('Reviews') }}
            </x-nav-link>
            <x-nav-link :href="route('boxReview.addReView')" :active="request()->routeIs('boxProducts.addProduct')" style="margin: 10px">
                {{ __('Add Review') }}
            </x-nav-link>
            

        </div>

    </x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <div class="container">
        <b>
            <h2 class="title text-center">Quan ly Review</h2>
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
                    <th>comment_review</th>
                    <th>rate_review</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reView as $value)
                <tr>
                    <td>{{$value->user_id}}</td>
                    <td>{{$value->product_id}}</td>
                    <td>{{$value->comment_review}}</td>
                    <td>{{$value->rate_review}}</td>
                    <td>
                        <a href="
                    {{ url('/products-crud/delete',['user_id'=>$value->user_id]) }}
                    " class="btn btn-danger">DELETE</a>
                        <a href="
                    {{ route('boxReview.edit',$value->user_id) }}
                    " class="btn btn-success">EDIT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$reView->links()}}
    </div>
</x-app-layout>
