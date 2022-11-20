@if (empty($filename))
    <img class="w-full h-auto aspect-video object-cover object-center" src="{{ asset('images/no_image.jpg') }}" alt="no image">
@else
    <img class="w-full h-auto aspect-video object-cover object-center" src="{{ asset('storage/shops/'. $filename) }}" alt="shop">
@endif