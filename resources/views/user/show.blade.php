<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品【詳細】
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto md:px-6 md:px-8">
            <div class="bg-white overflow-hidden shadow-sm md:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container py-24 mx-auto">
                        <div class="md:w-4/5 mx-auto flex flex-wrap items-center">
                            <div class="md:w-1/2 w-full md:h-auto h-64 object-cover object-center rounded p-4">
                                <x-thumbnail :filename="$product->imageFirst->filename" type="products" />
                            </div>
                            <div class="md:w-1/2 w-full">
                                <div class="p-4">
                                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $product->category->name }}</h2>
                                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                                    <p class="leading-relaxed">{{ $product->information }}</p>
                                </div>
                                <div class="flex justify-between items-center p-4">
                                    <span class="title-font font-medium text-2xl text-gray-900">¥ {{ number_format($product->price) }}</span>
                                    <div class="flex items-center">
                                        <span class="mr-2">数量</span>
                                        <div class="relative">
                                            <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-200 focus:border-yellow-500 text-base pl-3 pr-10">
                                            <option>SM</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded">カートに入れる</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
