@props(['status' => 'info'])

@php
    if ($status === 'info') {$color = 'text-green-500';}
    if ($status === 'error') {$color = 'text-red-500';}
@endphp

@if (session('message'))
    <div class="{{ $color }} p-2 mb-6 text-center">
        {{ session('message') }}
    </div>
@endif