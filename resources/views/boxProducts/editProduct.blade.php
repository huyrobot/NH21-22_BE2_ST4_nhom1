<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <div style="margin-top: 20px">
        <x-nav-link :href="route('boxProducts.crudProducts')"
                :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('Products') }}
            </x-nav-link>
            <x-nav-link :href="route('boxProducts.addProduct')" :active="request()->routeIs('boxProducts.addProduct')"
                style="margin: 10px">
                {{ __('Add Product') }}
            </x-nav-link>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-center"> Edit Product </div>        
                    <form action="{{route('boxProducts.update', $value->id) }}" method="post" style="margin-top: 20px">
                    @csrf
                    @method('POST')
                        <div>
                            <x-label for="name" :value="__('Product picture')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="hastag_product" value="{{$value->picture_Product}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Product name')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name_Product" value="{{$value->name_Product}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Price')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="price_Product" value="{{$value->price_Product}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Size')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="size_Product" value="{{$value->size_Product}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Color')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="color_Product" value="{{$value->color_Product}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Weight Product')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="weight_Product" value="{{$value->weight_Product}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Dimensisons')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="dimensisons_Product" value="{{$value->dimensisons_Product}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Materials Product')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="materials_Product" value="{{$value->materials_Product}}" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Description')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="description_Product" value="{{$value->description_Product}}" required
                                     autofocus/>
                        </div>
                        <x-button style="margin-top: 20px; background-color: #00ad5f" class="">
                            {{ __('Edit Product') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
