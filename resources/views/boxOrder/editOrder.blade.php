<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <div style="margin-top: 20px">
        <x-nav-link :href="route('boxOrder.crudOrder')" :active="request()->routeIs('boxProducts.crudProducts')"
                style="margin: 10px">
                {{ __('Orders') }}
            </x-nav-link>
            <x-nav-link :href="route('boxOrder.addOrder')" :active="request()->routeIs('boxProducts.addProduct')"
                style="margin: 10px">
                {{ __('Add Order') }}
            </x-nav-link>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-center"> Edit Order </div>        
                    <form action="{{route('boxOrder.update', $value->user_id) }}" method="post" style="margin-top: 20px">
                    @csrf
                    @method('POST')
                        <div>
                            <x-label for="name" :value="__('yourCart_id')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="yourCart_id" value="{{$value->yourCart_id}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('coupon_code')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="coupon_code" value="{{$value->coupon_code}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('address')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="address" value="{{$value->address}}" required
                                     autofocus/>
                        </div>
                       
                        <x-button style="margin-top: 20px; background-color: #00ad5f" class="">
                            {{ __('Edit Order') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
