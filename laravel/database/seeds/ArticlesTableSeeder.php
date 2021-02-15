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
            ['user_id' => '2',
            'title' => 'php',
            'content' => 'テスト5',
            'created_at' => '2021-02-10 22:25:06'
            ],
            ['user_id' => '3',
            'title' => 'docker',
            'content' => 'テスト6',
            'created_at' => '2021-02-10 22:32:06'
            ],
            ['user_id' => '4',
            'title' => 'HTML',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ]

        ]);
    }
}
