<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            画像【編集】
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 py-4 mx-auto">
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">画像情報</h1>
                            </div>
                            <x-auth-validation-errors class="mb-4 w-4/5 mx-auto" :errors="$errors" />
                            <form method="post" action="{{ route('owner.images.update', ['image' => $image->id]) }}">
                                @csrf
                                @method('put')
                                <div class="-m-2">
                                    <div class="p-2 w-4/5 lg:w-1/2 mx-auto">
                                        <x-thumbnail :filename="$image->filename" type="products" />
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="title" class="leading-7 text-sm text-gray-600">画像タイトル</label>
                                        <input type="text" id="title" name="title" value="{{ $image->title }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="p-2 w-full flex justify-around mt-12">
                                        <button type="button" onclick="location.href='{{ route('owner.images.index') }}'" class="text-white bg-gray-400 border-0 py-2 px-12 focus:outline-none hover:bg-gray-500 rounded text-lg">戻る</button>
                                        <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-12 focus:outline-none hover:bg-yellow-600 rounded text-lg">更新</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
