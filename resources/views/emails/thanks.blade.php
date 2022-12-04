<p class="mb-4">{{ $user->name }} 様</p>
<p class="mb-4">ご購入ありがとうございました。</p>

<p>＜ご購入内容＞</p>
@foreach ($products as $product)
    <ul class="mb-4">
        <li>商品名：{{ $product['name'] }}</li>
        <li>価格：¥ {{ number_format($product['price']) }}</li>
        <li>購入数：{{ $product['quantity'] }}</li>
        <li>合計価格：¥ {{ number_format($product['price'] * $product['quantity']) }}</li>
    </ul>
@endforeach