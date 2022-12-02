<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Home
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="get" action="{{ route('user.items.index') }}" class="flex justify-between items-center py-6">
            <div class="mr-4 text-gray-800 flex">
                <input name="keyword" placeholder="キーワードを入力" class="p-2" value="{{ \Request::get('keyword') }}">
                <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-12 focus:outline-none hover:bg-yellow-600 rounded text-lg">検索</button>
            </div>
            <div class="flex justify-end items-center">
                <div class="mr-4 text-gray-800">
                    <span class="leading-7 text-sm text-gray-600 mr-1">カテゴリ</span>
                    <select id="category" name="category" class="border-gray-400">
                        <option value="0" @if (\Request::get('category') == '0') selected @endif>全て</option>
                        @foreach ($categories as $category)
                            <optgroup label="{{ $category->name }}">
                            @foreach ($category->secondary as $secondary)
                                <option value="{{ $secondary->id }}" @if (\Request::get('category') == $secondary->id) selected @endif>{{ $secondary->name }}</option>
                            @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>
                <div class="mr-4 text-gray-800">
                    <span class="leading-7 text-sm text-gray-600 mr-1">表示順</span>
                    <select id="sort" name="sort" class="border-gray-400">
                        <option value="{{ \Constant::SORT_ORDER['recommend'] }}" @if (\Request::get('sort') === \Constant::SORT_ORDER['recommend']) selected @endif>おすすめ順</option>
                        <option value="{{ \Constant::SORT_ORDER['higherPrice'] }}" @if (\Request::get('sort') === \Constant::SORT_ORDER['higherPrice']) selected @endif>価格の高い順</option>
                        <option value="{{ \Constant::SORT_ORDER['lowerPrice'] }}" @if (\Request::get('sort') === \Constant::SORT_ORDER['lowerPrice']) selected @endif>価格の低い順</option>
                        <option value="{{ \Constant::SORT_ORDER['later'] }}" @if (\Request::get('sort') === \Constant::SORT_ORDER['later']) selected @endif>新しい順</option>
                        <option value="{{ \Constant::SORT_ORDER['older'] }}" @if (\Request::get('sort') === \Constant::SORT_ORDER['older']) selected @endif>古い順</option>
                    </select>
                </div>
                <div class="text-gray-800">
                    <span class="leading-7 text-sm text-gray-600 mr-1">表示件数</span>
                    <select id="pagination" name="pagination" class="border-gray-400">
                        <option value="20" @if (\Request::get('pagination') === '20') selected @endif>20件</option>
                        <option value="50" @if (\Request::get('pagination') === '50') selected @endif>50件</option>
                        <option value="100" @if (\Request::get('pagination') === '100') selected @endif>100件</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-4 mx-auto">
                        <div class="flex flex-wrap -m-4">
                        @foreach ($products as $product)
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4">
                            <a href="{{ route('user.items.show', ['item' => $product->id]) }}" class="block relative h-auto rounded overflow-hidden">
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
                        {{ $products->appends([
                                'sort' => \Request::get('sort'),
                                'pagination' => \Request::get('pagination'),
                            ])
                            ->links() }}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        const category = document.getElementById('category')
        category.addEventListener('change', function() {
            this.form.submit()
        })
        const select = document.getElementById('sort')
        select.addEventListener('change', function() {
            this.form.submit()
        })
        const paginate = document.getElementById('pagination')
        paginate.addEventListener('change', function() {
            this.form.submit()
        })
    </script>
</x-app-layout>
