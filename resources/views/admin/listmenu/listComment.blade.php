@extends('admin.mainAdmin')

@section('content')




    <table class="table">
        <thead>
        <tr style="font-size: 15px">
            <th class="align-middle text-center"> ID</th>
            <th class="align-middle" style="padding-right: 30px">Email user</th>
            <th class="align-middle text-center">Product ID</th>
            <th class="align-middle" style="padding-right: 100px">Content</th>
            <th class="align-middle text-center" >&nbsp;Action</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::comment($comment) !!}
        </tbody>

    </table>
    <div style="margin-left: auto;margin-right: auto">
        {{ $comment->links('vendor.pagination.customPhanTrang') }}
    </div>

@endsection
