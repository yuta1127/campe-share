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
            ['name' => 'ゲストユーザー',
            'email' => 'guest@guest.com',
            'password' => Hash::make('password123'),
            ],
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
            ],
            ['name' => '佐藤',
            'email' => 'sato444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '坂本',
            'email' => 'sakamoto444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '藤原',
            'email' => 'fujiwara444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '森下',
            'email' => 'morisita444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '小林',
            'email' => 'kobayashi444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '諸橋',
            'email' => 'morohashi444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '潮田',
            'email' => 'shiota444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '金森',
            'email' => 'kanamori444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '畠山',
            'email' => 'hatakeyama444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '水谷',
            'email' => 'mizutani444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '瀬川',
            'email' => 'segawa444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '遠山',
            'email' => 'toyama444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '高野',
            'email' => 'takano444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '中路',
            'email' => 'nakaji444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '水沢',
            'email' => 'mizusawa444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '狩村',
            'email' => 'karimura444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '時田',
            'email' => 'tokita444@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => '根本',
            'email' => 'nemoto444@test.com',
            'password' => Hash::make('password123'),
            ],
        ]);
    }
}

