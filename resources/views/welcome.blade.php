<x-guest-layout>
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/product-catalogue') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Products</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                  <h1 class="text-xl">In order to see the product catalogue, please login or register</h1>
                </div>
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                </div>
            </div>
        </div>
</x-guest-layout>
