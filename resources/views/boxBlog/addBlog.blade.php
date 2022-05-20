<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
        <div style="margin-top: 20px">
            <x-nav-link :href="route('boxBlog.crudBlog')" :active="request()->routeIs('boxProducts.crudProducts')" style="margin: 10px">
                {{ __('Blogs') }}
            </x-nav-link>
            <x-nav-link :href="route('boxBlog.addBlog')" :active="request()->routeIs('boxProducts.addProduct')" style="margin: 10px">
                {{ __('Add Blog') }}
            </x-nav-link>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-center"> Add Blog  </div>   
                    <form action="{{route('boxBlog.saveBlog')}}" method="post" style="margin-top: 20px">
                        @csrf
                        <div>
                            <x-label for="name" :value="__('Blog time')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="time_blog" :value="old('name')" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Blog title')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="title_blog" :value="old('name')" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Blog picture')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="picture_blog" :value="old('name')" required
                                     autofocus/>
                        </div>
                        <div>
                            <x-label for="name" :value="__('Blog content')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="content_blog" :value="old('name')" required
                                     autofocus/>
                        </div>
                       
                        <x-button style="margin-top: 20px; background-color: #00ad5f" class="">
                            {{ __('Add Blog') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
