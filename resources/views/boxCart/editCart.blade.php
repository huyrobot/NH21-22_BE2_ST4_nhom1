<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carts') }}
        </h2>
        <div style="margin-top: 20px">
        <x-nav-link :href="route('boxCart.crudCart')" :active="request()->routeIs('boxProducts.crudProducts')"
                style="margin: 10px">
                {{ __('Carts') }}
            </x-nav-link>
            <x-nav-link :href="route('boxCart.addCart')" :active="request()->routeIs('boxProducts.addProduct')"
                style="margin: 10px">
                {{ __('Add Cart') }}
            </x-nav-link>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-center"> Add Cart  </div>   
                    <form action="{{route('boxCart.update',$value->id ) }}" method="post" style="margin-top: 20px">
                        @csrf
                        @method('post')
                        <div>
                            <x-label for="name" :value="__('User_id')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="user_id" value="{{$value->user_id}}" required
                                     autofocus/>
                        </div>
                       
                        <x-button style="margin-top: 20px; background-color: #00ad5f" class="">
                            {{ __('Edit Cart') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
