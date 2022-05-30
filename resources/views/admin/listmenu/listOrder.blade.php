@extends('admin.mainAdmin')

@section('content')




    <table class="table">
        <thead>
        <tr style="font-size: 15px">
            <th class="align-middle text-center" style="padding-right: 30px">ID</th>
            <th class="align-middle text-center" style="padding-right: 30px">First name</th>
            <th class="align-middle text-center" style="padding-right: 30px">Last name</th>
            <th class="align-middle" style="padding-right: 30px">Email</th>
            <th class="align-middle" style="padding-right: 30px">Phone</th>
            <th class="align-middle" style="padding-right: 100px">Address</th>
            <th class="align-middle text-center" style="padding-right: 30px">City</th>
            <th class="align-middle text-center" style="padding-right: 30px">State</th>
            <th class="align-middle text-center">&nbsp;Confirm Order</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::order($order) !!}
        </tbody>

    </table>
    <div style="margin-left: auto;margin-right: auto">
        {{ $order->links('vendor.pagination.customPhanTrang') }}
    </div>

@endsection
