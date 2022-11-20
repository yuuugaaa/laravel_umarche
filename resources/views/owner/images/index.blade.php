<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            画像【一覧】
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
                            @foreach ($images as $image)
                                <div class="p-4 md:w-1/4">
                                <a href="{{ route('owner.images.edit', ['image' => $image->id]) }}" class="block h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <x-thumbnail :filename="$image->filename" type="products" />
                                    <div class="p-4">
                                        <h3 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $image->title }}</h3>
                                    </div>
                                </a>
                                </div>
                            @endforeach
                            </div>
                            {{ $images->links() }}
                            <div class="p-2 w-full flex justify-around mt-10">
                                <button onclick="location.href='{{ route('owner.images.create') }}'" class="text-white bg-yellow-500 border-0 py-2 px-12 focus:outline-none hover:bg-yellow-600 rounded text-lg">新規登録</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
