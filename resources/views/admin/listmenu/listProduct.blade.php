@extends('admin.mainAdmin')

@section('content')



    <table class="table">
        <thead>
        <tr style="font-size: 15px">
            <th class="align-middle" style="width: 30px">ID</th>
            <th class="align-middle" style="width: 100px">Picture</th>
            <th class="align-middle" style="padding-right: 30px">Product Name</th>
            <th class="align-middle" style="padding-right: 30px">Price</th>
            <th class="align-middle" style="padding-right: 30px">Size</th>
            <th class="align-middle" style="padding-right: 30px">Color</th>
            <th class="align-middle text-center" style="padding-right: 30px">Weight</th>
            <th class="align-middle text-center" style="padding-right: 13px">Dimensisons</th>
            <th class="align-middle text-center">Materials</th>
            <th class="align-middle">Description</th>
            <th class="align-middle" style="padding-left: 70px">&nbsp;Action</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::products($products) !!}
        </tbody>

    </table>
    <div style="margin-left: auto;margin-right: auto">
        {{ $products->links('vendor.pagination.customPhanTrang') }}
    </div>

@endsection
