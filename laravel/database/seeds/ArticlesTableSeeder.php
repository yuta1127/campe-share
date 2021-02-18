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
            'title' => 'php',
            'content' => 'テスト5',
            'created_at' => '2021-02-10 22:25:06'
            ],
            ['user_id' => '2',
            'title' => 'docker',
            'content' => 'テスト6',
            'created_at' => '2021-02-10 22:32:06'
            ],
            ['user_id' => '3',
            'title' => 'HTML',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '4',
            'title' => 'CSS',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '5',
            'title' => 'javascript',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '6',
            'title' => 'Ruby',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '7',
            'title' => 'Java',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '8',
            'title' => 'Python',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '9',
            'title' => 'Go',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '10',
            'title' => 'C',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '11',
            'title' => 'swift',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '12',
            'title' => 'kotlin',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '13',
            'title' => 'AWS',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '14',
            'title' => 'GCP',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '15',
            'title' => 'Azure',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '16',
            'title' => 'Redmine',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '17',
            'title' => 'Backlog',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '18',
            'title' => 'Gitlab',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '19',
            'title' => 'Source Tree',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '20',
            'title' => 'PostgreSQL',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => '21',
            'title' => 'Ruby on Rails',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
        ]);
    }
}

