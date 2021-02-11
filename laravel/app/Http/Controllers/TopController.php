<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function top()
    {
        // ダミーデータ
        $articles = [
            (object) [
                'id' => 1,
                'title' => 'vimでよく使うコマンド一覧',
                'like' => '0',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
            (object) [
                'id' => 2,
                'title' => '正規表現の記号一覧',
                'like' => '1',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 2,
                    'name' => 'ユーザー名2',
                ],
            ],
            (object) [
                'id' => 3,
                'title' => '便利なLinuxコマンド',
                'like' => '3',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 3,
                    'name' => 'ユーザー名3',
                ],
            ],
        ];
        return view('top', ['articles' => $articles]);
    }
}
