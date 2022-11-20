<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            店舗【編集】
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 py-4 mx-auto">
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">店舗情報</h1>
                            </div>
                            <x-auth-validation-errors class="mb-4 w-4/5 mx-auto" :errors="$errors" />
                            <form method="post" action="{{ route('owner.shops.update', ['shop' => $shop->id]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="-m-2">
                                    <div class="p-2 w-4/5 md:w-1/2 mx-auto">
                                        <x-thumbnail :filename="$shop->filename" type="shops" />
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="image" class="leading-7 text-sm text-gray-600">画像</label>
                                        <input type="file" id="image" name="image" accept="image/jpeg, image/jpg, image/png" class="w-full py-1 leading-8">
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative flex">
                                        <div class="mr-4"><input type="radio" name="is_selling" value="1" @if ($shop->is_selling === 1) { checked } @endif class="mr-2">販売中</div>
                                        <div class="mr-4"><input type="radio" name="is_selling" value="0" @if ($shop->is_selling === 0) { checked } @endif class="mr-2">停止中</div>
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">店名</label>
                                        <input type="text" id="name" name="name" value="{{ $shop->name }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="information" class="leading-7 text-sm text-gray-600">店舗情報</label>
                                        <textarea id="information" name="information" rows="10" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $shop->information }}</textarea>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full flex justify-around mt-12">
                                        <button type="button" onclick="location.href='{{ route('owner.shops.index') }}'" class="text-white bg-gray-400 border-0 py-2 px-12 focus:outline-none hover:bg-gray-500 rounded text-lg">戻る</button>
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
