@extends('admin.mainAdmin')

@section('content')




    <table class="table">
        <thead>
        <tr style="font-size: 15px">
            <th class="align-middle " style="width: 30px">ID</th>
            <th class="align-middle" style="width: 100px">Picture</th>
            <th class="align-middle" style="padding-right: 20px">Title</th>
            <th class="align-middle text-center">Time</th>
            <th class="align-middle">Content</th>
            <th class="align-middle" style="padding-left: 70px">&nbsp;Action</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::blog($blog) !!}
        </tbody>

    </table>
    <div style="margin-left: auto;margin-right: auto">
        {{ $blog->links('vendor.pagination.customPhanTrang') }}
    </div>

@endsection
