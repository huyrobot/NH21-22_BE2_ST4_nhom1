<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <div style="margin-top: 20px">
            <x-nav-link :href="route('boxHistory.crudHistory')" :active="request()->routeIs('boxProducts.crudProducts')"
                style="margin: 10px">
                {{ __('Statistical') }}
            </x-nav-link>
            <x-nav-link :href="route('boxHistory.addHistory')" :active="request()->routeIs('boxProducts.addProduct')"
                style="margin: 10px">
                {{ __('Add History') }}
            </x-nav-link>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-center"> Add History </div>   
                    <form action="{{route('boxHistory.saveHistory')}}" method="post" style="margin-top: 20px">
                        @csrf
                        <div>
                            <x-label for="name" :value="__('Id')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="id"
                                :value="old('name')" required autofocus />
                        </div>
                        <div>
                            <x-label for="name" :value="__('user_id')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="user_id" :value="old('name')"
                                required autofocus />
                        </div>
                        <div>
                            <x-label for="name" :value="__('listOfCart')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="listOfCart"
                                :value="old('name')" required autofocus />
                        </div>
                        <div>
                            <x-label for="name" :value="__('total_payments')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="total_payments" :value="old('name')"
                                required autofocus />
                        </div>
                        <div>
                            <x-label for="name" :value="__('dateOfPayment')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="dateOfPayment"
                                :value="old('name')" required autofocus />
                        </div>
                        <div>
                            <x-label for="name" :value="__('address')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="address" :value="old('name')"
                                required autofocus />
                        </div>

                        <x-button style="margin-top: 20px; background-color: #00ad5f" class="">
                            {{ __('Add History') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>