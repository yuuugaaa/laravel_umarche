<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'ファッション',
                'sort_order' => 1,
            ],
            [
                'name' => 'インテリア',
                'sort_order' => 2,
            ],
            [
                'name' => '雑貨',
                'sort_order' => 3,
            ],
        ]);
    
        DB::table('secondary_categories')->insert([
            [
                'name' => 'トップス',
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'ボトムス',
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'アウター',
                'sort_order' => 3,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'シューズ',
                'sort_order' => 4,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'テーブル',
                'sort_order' => 5,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'チェア',
                'sort_order' => 6,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'ベッド',
                'sort_order' => 7,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'ソファ',
                'sort_order' => 8,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'リビング',
                'sort_order' => 9,
                'primary_category_id' => 3,
            ],
            [
                'name' => 'キッチン',
                'sort_order' => 10,
                'primary_category_id' => 3,
            ],
            [
                'name' => 'ベッドルーム',
                'sort_order' => 11,
                'primary_category_id' => 3,
            ],
        ]);
    }
}
