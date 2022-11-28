<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Home
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-wrap -m-4">
                        @foreach ($products as $product)
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4">
                            <a href="{{ route('user.items.show', ['item' => $product->id]) }}" class="block relative h-48 rounded overflow-hidden">
                                <x-thumbnail :filename="$product->filename" type="products" />
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $product->category }}</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
                                <p class="mt-1">¥ {{ number_format($product->price) }}</p>
                            </div>
                            </div>
                        @endforeach
                        </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
