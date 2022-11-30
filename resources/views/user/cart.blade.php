<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            カート
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-4 mx-auto">
                            @foreach ($products as $product)
                            <div class="p-4 mb-4 md:flex justify-between border-2 border-gray-300 rounded">
                                <div class="md:w-4/12 p-2">
                                    @if ($product->imageFirst->filename !== null)
                                    <img src="{{ asset('storage/products/'). '/'. $product->imageFirst->filename }}" alt="">
                                    @endif
                                </div>
                                <div class="md:w-4/12 flex items-center md:justify-center">
                                    <div>
                                    <h3 class="p-2 text-2xl font-medium text-gray-900 title-font">{{ $product->name }}</h3>
                                    <div class="flex">
                                        <p class="p-2 leading-relaxed">¥ {{ number_format($product->price) }}</p>
                                        <p class="p-2 leading-relaxed">×</p>
                                        <p class="p-2 leading-relaxed">{{ $product->pivot->quantity }}個</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="md:w-3/12 flex items-center md:justify-center">
                                    <p class="p-2 text-xl text-gray-500">¥ {{ number_format($product->price * $product->pivot->quantity) }}</p>
                                </div>
                                <div class="md:w-1/12 flex items-center justify-center">
                                    <form method="post" action="{{ route('user.cart.delete', ['item' => $product->id]) }}">
                                        @csrf
                                        <button class="p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                            <div class="flex justify-end items-center p-4">
                                <p class="text-xl font-medium text-gray-500">合計：</p>
                                <p class="text-2xl font-bold text-yellow-500">¥ {{ number_format($totalPrice) }}</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
