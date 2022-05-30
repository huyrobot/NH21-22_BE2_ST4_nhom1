@extends('admin.mainAdmin')

@section('content')




    <table class="table">
        <thead>
        <tr style="font-size: 15px">
            <th class="align-middle text-center" >Order ID</th>
            <th class="align-middle text-center" >Product ID</th>
            <th class="align-middle text-center" >Quantity</th>
            <th class="align-middle text-center" >Price</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::orderItem($orderItem) !!}
        </tbody>

    </table>
    <div style="margin-left: auto;margin-right: auto">
    </div>

@endsection
