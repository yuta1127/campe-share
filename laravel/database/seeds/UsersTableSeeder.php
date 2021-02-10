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
            ['name' => 'ららら',
            'email' => 'test123@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'そそそ',
            'email' => 'test234@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'せせせ',
            'email' => 'test345@test.com',
            'password' => Hash::make('password123'),
            ]
        ]);
    }
}
