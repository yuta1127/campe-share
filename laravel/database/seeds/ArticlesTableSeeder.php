<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['user_id' => '1',
            'title' => 'あああ',
            'content' => 'テスト１',
            ],
            ['user_id' => '2',
            'title' => 'いいい',
            'content' => 'テスト2',
            ],
            ['user_id' => '3',
            'title' => 'ううう',
            'content' => 'テスト3',
            ]

        ]);
    }
}
