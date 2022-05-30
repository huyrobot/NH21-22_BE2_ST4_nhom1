@extends('admin.mainAdmin')

@section('content')




    <table class="table">
        <thead>
        <tr style="font-size: 15px">
            <th class="align-middle text-center" style="padding-right: 30px">Product ID</th>
            <th class="align-middle" style="padding-right: 30px">Hastag</th>
            <th class="align-middle" style="padding-left: 70px">&nbsp;Action</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::hastagProducts($blog) !!}
        </tbody>

    </table>
    <div style="margin-left: auto;margin-right: auto">
        {{ $blog->links('vendor.pagination.customPhanTrang') }}
    </div>

@endsection
