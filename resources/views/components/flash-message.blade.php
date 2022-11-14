@props(['status' => 'info'])

@php
    if ($status === 'info') {$color = 'text-blue-600';}
    if ($status === 'error') {$color = 'text-red-600';}
@endphp

@if (session('message'))
    <div class="{{ $color }} p-2 mb-6 text-center">
        {{ session('message') }}
    </div>
@endif