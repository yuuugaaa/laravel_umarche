<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\Product;

class CartService
{
    public static function getItemsInCart($items)
    {
        $products = [];

        foreach ($items as $item) {
            // オーナー情報の取得
            $p = Product::findOrFail($item->product_id);
            $owner = $p->shop->owner->select('name', 'email')->first()->toArray();
            $values = array_values($owner);
            $keys = ['ownerName', 'email'];
            $ownerInfo = array_combine($keys, $values);

            // 商品情報の取得
            $product = Product::where('id', $item->product_id)
            ->select('id', 'name', 'price')->get()->toArray();

            // 購入数量の取得
            $quantity = Cart::where('product_id', $item->product_id)
            ->select('quantity')->get()->toArray();

            $result = array_merge($product[0], $ownerInfo, $quantity[0]);
            array_push($products, $result);
        }

        return $products;
    }
}