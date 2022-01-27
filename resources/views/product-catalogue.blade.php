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
                           <div class="flex justify-between items-center">
                               <span class="font-bold">${{$product->price}}</span>
                                   <x-button onclick="location.href='product/{{$product->id}}'" class="ml-3">See Details</x-button>
                           </div>
                       </div>
                    @endforeach
                </div>
            </div>
            <form method="post" action="/newsletter" class="p-6 mt-10 bg-white border-b border-gray-200 flex flex-col items-center justify-center">
                @csrf
                <h2 class="font-bold">Subscribe for our newsletter. Never miss a new product</h2>
                <div class="mt-4">
                    <x-input id="email" class="block mt-1 w-96" type="email" name="email" placeholder="Your email address" required />
                </div>
                <x-button class="mt-4">Subscribe</x-button>
            </form>
        </div>
    </div>

</x-app-layout>
