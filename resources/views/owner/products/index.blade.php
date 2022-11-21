<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品【一覧】
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-4 mx-auto">
                            <x-flash-message status="session('status')" />
                            <div class="flex flex-wrap -m-4">
                            @foreach ($ownerInfo as $owner)
                            @foreach ($owner->shop->product as $product)
                                <div class="p-2 md:p-4 w-1/2 sm:w-1/3 md:w-1/4">
                                <a href="{{ route('owner.products.edit', ['product' => $product->id]) }}" class="block h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <x-thumbnail :filename="$product->imageFirst->filename" type="products" />
                                    <div class="p-2">
                                        <p class="leading-relaxed break-words">{{ $product->name }}</p>
                                    </div>
                                </a>
                                </div>
                            @endforeach
                            @endforeach
                            </div>
                            <div class="p-2 w-full flex justify-around mt-10">
                                <button onclick="location.href='{{ route('owner.products.create') }}'" class="text-white bg-yellow-500 border-0 py-2 px-12 focus:outline-none hover:bg-yellow-600 rounded text-lg">新規登録</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
