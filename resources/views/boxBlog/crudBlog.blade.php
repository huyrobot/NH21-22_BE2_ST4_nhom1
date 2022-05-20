<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
        <div style="margin-top: 20px">
            <x-nav-link :href="route('boxBlog.crudBlog')" :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('Blogs') }}
            </x-nav-link>
            <x-nav-link :href="route('boxBlog.addBlog')" :active="request()->routeIs('boxProducts.addProduct')" style="margin: 10px">
                {{ __('Add Blog') }}
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
                    <th>id</th>
                    <th>Time_blog</th>
                    <th>Title_blog</th>
                    <th>Picture_blog</th>
                    <th>Content_blog</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blog as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->time_blog}}</td>
                    <td>{{substr($value->title_blog,0,20)}}</td>
                    <td>{{$value->picture_Blog}}</td>
                    <td>{{substr($value->content_blog,0,50)}}</td>
                    <td>
                        <a href="
                    {{ url('/blog-crud/delete',['id'=>$value->id]) }}
                    " class="btn btn-danger">DELETE</a>
                        <a href="
                    {{ route('boxBlog.edit',$value->id) }}
                    " class="btn btn-success">EDIT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$blog->links()}}
    </div>
</x-app-layout>