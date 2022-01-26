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
            <div class="mt-12 h-96 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="h-full p-6 bg-white border-b border-gray-200">
                    <h2>Reviews</h2>
                    <div class="h-full grid grid-cols-2 gap-4 py-6">
                        <form method="POST" action="{{ route('reviews') }}" class="flex flex-col justify-between">
                            @csrf
                            <textarea class="
                            mb-6
                            resize-none
                            form-control
                            block
                            w-full
                            h-full
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
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="review"
                            >
                            </textarea>
                            <input name="product_id" value="{{$product->id}}" id="name" class="invisible" />
                            <div class="flex justify-end">
                                <x-button type="submit" class="ml-3">Add a review</x-button>
                            </div>
                        </form>
                        <div class="overflow-auto">
                            @foreach($reviews as $review)
                                <span class="block border-2 rounded mb-6 p-4">{{$review->review}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
