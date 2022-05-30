@extends('admin.mainAdmin')

@section('content')




    <table class="table">
        <thead>
        <tr style="font-size: 15px">
            <th class="align-middle text-center" style="padding-right: 30px">ID</th>
            <th class="align-middle" style="padding-right: 30px">Name</th>
            <th class="align-middle" style="padding-right: 30px">Email</th>
            <th class="align-middle" style="padding-right: 30px">Password</th>
            <th class="align-middle" style="padding-right: 30px">Phone</th>
            <th class="align-middle" style="padding-right: 30px">Address</th>
            <th class="align-middle" style="padding-right: 30px">City</th>
            <th class="align-middle" style="padding-left: 70px">&nbsp;Action</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::users($users) !!}
        </tbody>

    </table>
    <div style="margin-left: auto;margin-right: auto">
        {{ $users->links('vendor.pagination.customPhanTrang') }}
    </div>

@endsection
