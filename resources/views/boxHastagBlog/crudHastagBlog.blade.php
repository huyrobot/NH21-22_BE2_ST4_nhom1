<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hastag Blogs') }}
        </h2>
        <div style="margin-top: 20px">
        <x-nav-link :href="route('boxHastagBlog.crudHastagBlog')"
                :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('Hastag Blogs') }}
            </x-nav-link>
            <x-nav-link :href="route('boxHastagBlog.addHastagBlog')"
                :active="request()->routeIs('boxProducts.addProduct')" style="margin: 10px">
                {{ __('Add Hastag Blog') }}
            </x-nav-link>

        </div>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <div class="container">
        <b>
            <h2 class="title text-center">Quan ly Hastag Blog</h2>
        </b>
        <table class="table table-bordered">
            <thead>
            @if(Session::has('thongbao'))
                <div class="alert alert-success">
                    {{Session::get('thongbao')}}
                </div>
                @endif
                <tr>
                    <th>blog_id</th>
                    <th>hastag_blog</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hastagBlog as $value)
                <tr>
                    <td>{{$value->blog_id}}</td>
                    <td>{{$value->hastag_blog}}</td>
                    <td>
                        <a href="
                        {{ url('/hastagblog-crud/delete',['blog_id'=>$value->blog_id]) }}
                        " class="btn btn-danger">DELETE</a>
                        <a href="
                        {{ route('boxHastagBlog.edit', $value->blog_id ) }}
                        " class="btn btn-success">EDIT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$hastagBlog->links()}}
    </div>




</x-app-layout>