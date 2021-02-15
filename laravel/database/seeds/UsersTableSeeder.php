<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => '竹村',
            'email' => 'takemura555@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '鈴木',
            'email' => 'suzuki999@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '伊藤',
            'email' => 'itoh444@test.com',
            'password' => Hash::make('password123'),
            ]
        ]);
    }
}
