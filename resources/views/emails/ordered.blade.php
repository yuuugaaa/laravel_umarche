<p class="mb-4">{{ $product['ownerName'] }} 様の商品が購入されました。</p>

<p>＜購入された商品＞</p>
<ul class="mb-4">
    <li>商品名：{{ $product['name'] }}</li>
    <li>価格：¥ {{ number_format($product['price']) }}</li>
    <li>購入数：{{ $product['quantity'] }}</li>
    <li>合計価格：¥ {{ number_format($product['price'] * $product['quantity']) }}</li>
</ul>

<p>＜購入者情報＞</p>
<ul>
    <li>ユーザー名：{{ $user->name }} 様</li>
    <li>メールアドレス：{{ $user->email }}</li>
</ul>