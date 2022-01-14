<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Catalogue') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-4 gap-4">
                   @foreach($products as $product)
                       <div class="flex flex-col justify-between border rounded-md p-4">
                           <div>
                               <h2 class="font-semibold text-lg"> {{$product->name}}</h2>
                               <span class="block pt-2 pb-10">{{$product->description}}</span>
                           </div>
                           <div class="flex justify-between">
                               <span class="font-bold">${{$product->price}}</span>
                               <x-button class="ml-3">Buy Now</x-button>
                           </div>
                       </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
