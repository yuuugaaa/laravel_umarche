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
                                    <p class="p-2">削除ボタン</p>
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
