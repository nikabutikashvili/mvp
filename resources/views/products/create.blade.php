<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col items-center">
                    <h1 class="text-xl mb-10">Add a Product</h1>
                    <form method="POST" action="{{ route('store-product') }}" enctype="multipart/form-data" class="w-96">
                        @csrf
                        <div class="mb-4">
                            <x-label for="name" :value="__('Name of the Product')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        <div class="mb-4">
                            <x-label for="description" :value="__('Description')" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('name')" required autofocus />
                        </div>
                        <div class="mb-4">
                            <x-label for="price" :value="__('Price')" />
                            <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('name')" required autofocus />
                        </div>
                        <div class="mb-4">
                            <span />
                            <x-label for="image" :value="__('Image')" />
                            <x-input id="image" class="block mt-1 w-full cursor-pointer" type="file" name="image" :value="old('name')" required autofocus />
                        </div>
                        <div class="flex justify-end mt-8">
                            <x-button type="submit">Create</x-button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</x-app-layout>
