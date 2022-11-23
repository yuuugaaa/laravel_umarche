@php
    if ($name === 'image1') { $modal = 'modal-1'; }
    if ($name === 'image2') { $modal = 'modal-2'; }
    if ($name === 'image3') { $modal = 'modal-3'; }
    if ($name === 'image4') { $modal = 'modal-4'; }
@endphp

<div class="modal micromodal-slide" id="{{ $modal }}" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <header class="modal__header">
            <h2 class="text-xl font-medium text-gray-900" id="{{ $modal }}-title">
                ファイル選択
            </h2>
            <button type="button" class="modal__close" aria-label="閉じる" data-micromodal-close></button>
        </header>
        <main class="modal__content" id="{{ $modal }}-content">
            <div class="flex flex-wrap -m-4">
            @foreach ($images as $image)
                <div class="p-2 md:p-4 w-1/2 sm:w-1/3 md:w-1/4">
                <div class="block h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                    <img class="image w-full h-auto aspect-video object-cover object-center"
                        data-id="{{ $name }}_{{ $image->id }}"
                        data-file="{{ $image->filename }}"
                        data-path="{{ asset('storage/products/') }}"
                        data-modal="{{ $modal }}"
                        src="{{ asset('storage/products'). '/'. $image->filename }}">
                    <div class="p-2">
                        <p class="leading-relaxed break-words">{{ $image->title }}</p>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </main>
        <footer class="modal__footer">
            <button type="button" class="modal__btn" data-micromodal-close aria-label="閉じる">閉じる</button>
        </footer>
    </div>
    </div>
</div>

<div class="p-2 w-full md:w-1/2">
    <label for="{{ $name }}" class="leading-7 text-sm text-gray-600">{{ $title }}</label>
    <a data-micromodal-trigger="{{ $modal }}" href='javascript:;' class="block w-full">
        <img id="{{ $name }}_thumbnail" src="{{ asset('images/no_image.jpg') }}" class="h-auto aspect-video object-cover object-center">
    </a>
    <input type="hidden" id="{{ $name }}_hidden" name="{{ $name }}" value="">
</div>