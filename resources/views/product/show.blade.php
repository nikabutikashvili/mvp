<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-2 gap-4">
                    <div>Here should be the image</div>
                    <div class="px-16">
                        <h1 class="text-xl font-bold text-center"> {{$product->name}}</h1>
                        <span class="block my-12 text-lg">Price: ${{$product->price}}</span>
                        <span class="block mb-12">{{$product->description}}</span>
                        <div>
                                <x-button class="ml-3">Give it a like</x-button>
                                <x-button class="ml-3">Add to Cart</x-button>
                                <x-button onclick="location.href='{{$product->id}}/edit'" class="ml-3">Edit</x-button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-12 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Reviews</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="pt-6">
                            <textarea class="
                            mb-6
                            resize-none
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            >
                            </textarea>
                            <div class="flex justify-end">
                                <x-button class="ml-3">Add a review</x-button>
                            </div>
                        </div>
                        <div>
                            Some other reviews
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
