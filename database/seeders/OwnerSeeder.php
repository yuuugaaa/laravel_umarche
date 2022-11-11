<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/11 11:11:11'
            ],
            [
                'name' => 'test2',
                'email' => 'test2@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/12 11:11:11'
            ],
            [
                'name' => 'test3',
                'email' => 'test3@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
        ]);
    }
}
