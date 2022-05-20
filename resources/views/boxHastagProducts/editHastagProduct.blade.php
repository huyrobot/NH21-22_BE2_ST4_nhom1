<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <div style="margin-top: 20px">
        <x-nav-link :href="route('boxHastagProducts.crudHastagProducts')"
                :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('Hastag Products') }}
            </x-nav-link>
            <x-nav-link :href="route('boxHastagProducts.addHastagProduct')"
                :active="request()->routeIs('boxProducts.addProduct')" style="margin: 10px">
                {{ __('Add Hastag Product') }}
            </x-nav-link>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-center"> Edit Hastag Product </div>   
                    <form action="{{route('boxHastagProducts.update',$value->product_id ) }}" method="post" style="margin-top: 20px">
                        @csrf
                        @method('post')
                        <div>
                            <x-label for="name" :value="__('Hastag product')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="hastag_product" value="{{$value->hastag_product}}" required
                                     autofocus/>
                        </div>
                       
                        <x-button style="margin-top: 20px; background-color: #00ad5f" class="">
                            {{ __('Edit Hastag Product') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
