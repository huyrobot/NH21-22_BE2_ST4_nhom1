<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('History') }}
        </h2>
        <x-nav-link :href="route('boxHistory.crudHistory')" :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('Histories') }}
            </x-nav-link>
            <x-nav-link :href="route('boxHistory.addHistory')" :active="request()->routeIs('boxProducts.addProduct')" style="margin: 10px">
                {{ __('Add History') }}
            </x-nav-link>

    </x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <div class="container">
        <b>
            <h2 class="title text-center">Quan ly TransactionHistory</h2>
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
                    <th>user_id</th>
                    <th>listOfCart</th>
                    <th>total_payments</th>
                    <th>dateOfPayment</th>
                    <th>address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($history as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->user_id}}</td>
                    <td>{{$value->listOfCart}}</td>
                    <td>{{$value->total_payments}}</td>
                    <td>{{$value->dateOfPayment}}</td>
                    <td>{{$value->address}}</td>
                    <td>
                        <a href="
                        {{ url('/history-crud/delete',['id'=>$value->id]) }}
                        " class="btn btn-danger">DELETE</a>
                        <a href="
                        {{ route('boxHistory.edit',$value->id) }}
                        " class="btn btn-success">EDIT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$history->links()}}
    </div>
</x-app-layout>
