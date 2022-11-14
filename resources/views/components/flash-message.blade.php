@props(['status' => 'info'])

@php
    if (session('status') === 'info') {$color = 'text-green-500';}
    if (session('status') === 'alert') {$color = 'text-red-500';}
@endphp

@if (session('message'))
    <div class="{{ $color }} p-2 mb-6 text-center">
        {{ session('message') }}
    </div>
@endif