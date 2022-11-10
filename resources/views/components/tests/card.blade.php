@props([
    'title' => '初期値タイトル',
    'content' => '初期値コンテンツ',
    'message' => '初期値メッセージ'
])

<div {{ $attributes->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2'
]) }} >
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>