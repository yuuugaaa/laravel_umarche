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
                        <div class="container py-4 mx-auto">
                        <div class="md:w-4/5 mx-auto flex flex-wrap items-center">
                            <div class="md:w-1/2 w-full md:h-auto h-64 object-cover object-center rounded p-4">
                                <!-- Slider main container -->
                                <div class="swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    @if ($product->imageFirst->filename !== null)
                                    <div class="swiper-slide"><img src="{{ asset('storage/products/'). '/'. $product->imageFirst->filename }}" alt=""></div>
                                    @endif
                                    @if ($product->imageSecond->filename !== null)
                                    <div class="swiper-slide"><img src="{{ asset('storage/products/'). '/'. $product->imageSecond->filename }}" alt=""></div>
                                    @endif
                                    @if ($product->imageThird->filename !== null)
                                    <div class="swiper-slide"><img src="{{ asset('storage/products/'). '/'. $product->imageThird->filename }}" alt=""></div>
                                    @endif
                                    @if ($product->imageFourth->filename !== null)
                                    <div class="swiper-slide"><img src="{{ asset('storage/products/'). '/'. $product->imageFourth->filename }}" alt=""></div>
                                    @endif
                                    </div>
                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination"></div>
                                
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                
                                    <!-- If we need scrollbar -->
                                    <div class="swiper-scrollbar"></div>
                                </div>
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
                                            <select name="quantity" class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-200 focus:border-yellow-500 text-base pl-3 pr-10">
                                            @for ($i=1; $i<=$quantity; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>    
                                            @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <button class="flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded">カートに入れる</button>
                                </div>
                            </div>
                        </div>
                        <div class="border-t-2 border-gray-200 md:w-4/5 mx-auto p-4 text-center">
                            <p class="leading-relaxed mb-2">この商品を販売しているショップ</p>
                            <div class="md:w-1/3 mx-auto">
                            <a data-micromodal-trigger="modal-1" href='javascript:;' class="block h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                @if ($product->shop->filename !== null)
                                <x-thumbnail :filename="$product->shop->filename" type="shops" />
                                @endif
                                <div class="p-2">
                                    <h3 class="title-font text-lg font-medium text-gray-900">{{ $product->shop->name }}</h3>
                                </div>
                            </a>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay z-50" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
            <h2 class="text-xl font-medium text-gray-900" id="modal-1-title">
                {{ $product->shop->name }}
            </h2>
            <button type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="modal-1-content">
            <p>{{ $product->shop->information }}</p>
            </main>
            <footer class="modal__footer">
            <button type="button" class="modal__btn" data-micromodal-close aria-label="Close this dialog window">閉じる</button>
            </footer>
        </div>
        </div>
    </div>
    <script src="{{ mix('js/swiper.js') }}"></script>
</x-app-layout>
