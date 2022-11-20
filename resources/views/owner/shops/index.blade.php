<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            店舗情報
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-flash-message status="session('status')" />
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-4 mx-auto">
                        <div class="flex flex-wrap -m-4">
                            @foreach ($shops as $shop)
                                <div class="p-4 md:w-1/3">
                                <a href="{{ route('owner.shops.edit', ['shop' => $shop->id]) }}" class="block h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <x-shop-thumbnail :filename="$shop->filename" />
                                    <div class="p-4">
                                        @if ($shop->is_selling)
                                            <span class="text-green-400 tracking-widest text-xs title-font font-medium mb-1">販売中</span>
                                        @else
                                            <span class="text-red-400 tracking-widest text-xs title-font font-medium mb-1">停止中</span>
                                        @endif
                                        <h3 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $shop->name }}</h3>
                                        <p class="leading-relaxed mb-3">{{ $shop->information }}</p>
                                    </div>
                                </a>
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
