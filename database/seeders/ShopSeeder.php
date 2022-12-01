<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'shop name1',
                'information' => 'shop information1',
                'filename' => 'sample1.jpg',
                'is_selling' => true,
            ],
            [
                'owner_id' => 2,
                'name' => 'shop name2',
                'information' => 'shop information2',
                'filename' => 'sample2.jpg',
                'is_selling' => true,
            ],
            [
                'owner_id' => 2,
                'name' => 'shop name3',
                'information' => 'shop information3',
                'filename' => 'sample3.jpg',
                'is_selling' => true,
            ],
        ]);
    }
}
