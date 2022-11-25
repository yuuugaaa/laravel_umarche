<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品【編集】
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 py-4 mx-auto">
                            <x-flash-message status="session('status')" />
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">商品情報</h1>
                            </div>
                            <x-auth-validation-errors class="mb-4 w-4/5 mx-auto" :errors="$errors" />
                            <form method="post" action="{{ route('owner.products.update', ['product' => $product->id]) }}">
                                @csrf
                                @method('put')
                                <div class="-m-2">
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">商品名</label>
                                        <input type="text" id="name" name="name" value="{{ $product->name }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="information" class="leading-7 text-sm text-gray-600">商品情報</label>
                                        <textarea id="information" name="information" rows="10" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $product->information }}</textarea>
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="price" class="leading-7 text-sm text-gray-600">価格</label>
                                        <input type="number" id="price" name="price" value="{{ $product->price }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="current_quantity" class="leading-7 text-sm text-gray-600">現在の在庫数</label>
                                        <div class="w-full bg-gray-100 bg-opacity-50 rounded py-1 px-3 leading-8">{{ $quantity }}</div>
                                        <input type="hidden" id="current_quantity" name="current_quantity" value="{{ $quantity }}">
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative flex">
                                        <div class="mr-4"><input type="radio" name="type" value="1" checked class="mr-2">追加</div>
                                        <div class="mr-4"><input type="radio" name="type" value="2" class="mr-2">削減</div>
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="quantity" class="leading-7 text-sm text-gray-600">追加／削減数</label>
                                        <input type="number" id="quantity" name="quantity" value="0" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        <span class="leading-7 text-sm text-gray-600">※0〜99で設定してください</span>
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="shop_id" class="leading-7 text-sm text-gray-600">販売店舗</label>
                                        <select id="shop_id" name="shop_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        @foreach ($shops as $shop)
                                                <option value="{{ $shop->id }}" @if ($shop->id === $product->shop_id) selected @endif>{{ $shop->name }}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="category" class="leading-7 text-sm text-gray-600">カテゴリ</label>
                                        <select id="category" name="category" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        @foreach ($categories as $category)
                                            <optgroup label="{{ $category->name }}">
                                            @foreach ($category->secondary as $secondary)
                                                <option value="{{ $secondary->id }}" @if ($secondary->id === $product->secondary_category_id) selected @endif>{{ $secondary->name }}</option>
                                            @endforeach
                                            </optgroup>
                                        @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative">
                                        <label for="sort_order" class="leading-7 text-sm text-gray-600">表示順</label>
                                        <input type="number" id="sort_order" name="sort_order" value="{{ $product->sort_order }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="w-4/5 mx-auto flex flex-wrap justify-between">
                                        <x-select-image :images="$images" currentId="{{ $product->image1 }}" currentImage="{{ $product->imageFirst->filename ?? '' }}" name="image1" title="画像1" />
                                        <x-select-image :images="$images" currentId="{{ $product->image2 }}" currentImage="{{ $product->imageSecond->filename ?? '' }}" name="image2" title="画像2" />
                                        <x-select-image :images="$images" currentId="{{ $product->image3 }}" currentImage="{{ $product->imageThird->filename ?? '' }}" name="image3" title="画像3" />
                                        <x-select-image :images="$images" currentId="{{ $product->image4 }}" currentImage="{{ $product->imageFourth->filename ?? '' }}" name="image4" title="画像4" />
                                    </div>
                                    <div class="p-2 w-4/5 mx-auto">
                                        <div class="relative flex">
                                        <div class="mr-4"><input type="radio" name="is_selling" value="1" @if ($product->is_selling === 1) checked @endif class="mr-2">販売中</div>
                                        <div class="mr-4"><input type="radio" name="is_selling" value="0" @if ($product->is_selling === 0) checked @endif class="mr-2">停止中</div>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full flex justify-around mt-12">
                                        <button type="button" onclick="location.href='{{ route('owner.products.index') }}'" class="text-white bg-gray-400 border-0 py-2 px-12 focus:outline-none hover:bg-gray-500 rounded text-lg">戻る</button>
                                        <button type="submit" class="text-white bg-green-500 border-0 py-2 px-12 focus:outline-none hover:bg-green-600 rounded text-lg">更新</button>
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

                //MicroModal.close(modal);
                document.getElementById(modal + '_close').click()
            })
        })
    </script>
</x-app-layout>
