<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <div style="margin-top: 20px">
        <x-nav-link :href="route('boxWishList.crudWishList')" :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('WishLishs') }}
            </x-nav-link>
            <x-nav-link :href="route('boxWishList.addWishLish')" :active="request()->routeIs('boxProducts.addProduct')" style="margin: 10px">
                {{ __('Add WishLish') }}
            </x-nav-link>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-center"> Add  WishLish </div>      
                    <form action="{{route('boxWishList.saveWishLish')}}" method="post" style="margin-top: 20px">
                        @csrf
                        <div>
                            <x-label for="name" :value="__('User id')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="user_id" :value="old('name')" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Product id')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="product_id" :value="old('name')" required
                                     autofocus/>
                        </div>
            
                        <x-button style="margin-top: 20px; background-color: #00ad5f" class="">
                            {{ __('Add WishLish') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
