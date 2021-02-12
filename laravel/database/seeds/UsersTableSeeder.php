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
            ['name' => 'アイウエオ',
            'email' => 'test555@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'かきくけこ',
            'email' => 'test999@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'さしすせそ',
            'email' => 'test444@test.com',
            'password' => Hash::make('password123'),
            ]
        ]);
    }
}
