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
                'name' => 'test1',
                'email' => 'test1@test.com',
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
            [
                'name' => 'test4',
                'email' => 'test4@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test5',
                'email' => 'test5@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test6',
                'email' => 'test6@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test7',
                'email' => 'test7@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test8',
                'email' => 'test8@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test9',
                'email' => 'test9@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test10',
                'email' => 'test10@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test11',
                'email' => 'test11@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test12',
                'email' => 'test12@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test13',
                'email' => 'test13@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test14',
                'email' => 'test14@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
            [
                'name' => 'test15',
                'email' => 'test15@test.com',
                'password' => Hash::make('testpass'),
                'created_at' => '2022/11/13 11:11:11'
            ],
        ]);
    }
}
