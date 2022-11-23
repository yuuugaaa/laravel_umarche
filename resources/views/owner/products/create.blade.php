<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品【登録】
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 py-4 mx-auto">
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">新規作成</h1>
                            </div>
                            <x-auth-validation-errors class="mb-4 w-4/5 mx-auto" :errors="$errors" />
                            <form method="post" action="{{ route('owner.products.store') }}">
                                @csrf
                                <div class="-m-2">
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="category" class="leading-7 text-sm text-gray-600">カテゴリ</label>
                                        <select id="category" name="category" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        @foreach ($categories as $category)
                                            <optgroup label="{{ $category->name }}">
                                            @foreach ($category->secondary as $secondary)
                                                <option value="{{ $secondary->id }}">{{ $secondary->name }}</option>
                                            @endforeach
                                            </optgroup>
                                        @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="w-4/5 mx-auto flex flex-wrap justify-between">
                                        <x-select-image :images="$images" name="image1" title="画像1" />
                                        <x-select-image :images="$images" name="image2" title="画像2" />
                                        <x-select-image :images="$images" name="image3" title="画像3" />
                                        <x-select-image :images="$images" name="image4" title="画像4" />
                                    </div>
                                    <div class="p-2 w-full flex justify-around mt-12">
                                        <button type="button" onclick="location.href='{{ route('owner.products.index') }}'" class="text-white bg-gray-400 border-0 py-2 px-12 focus:outline-none hover:bg-gray-500 rounded text-lg">戻る</button>
                                        <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-12 focus:outline-none hover:bg-yellow-600 rounded text-lg">登録</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        'use strict'
        const images = document.querySelectorAll('.image')
        
        images.forEach(image => {
            image.addEventListener('click', function(e) {
                const imageName = e.target.dataset.id.substr(0, 6)
                const imageId = e.target.dataset.id.replace(imageName + '_', '')
                const imageFile = e.target.dataset.file
                const imagePath = e.target.dataset.path
                const modal = e.target.dataset.modal

                document.getElementById(imageName + '_thumbnail').src = imagePath + '/' + imageFile
                document.getElementById(imageName + '_hidden').value = imageId

                MicroModal.close(modal);
            })
        })
    </script>
</x-app-layout>
