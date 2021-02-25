<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    protected $article;

    //コンストラクタ
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function search(Request $request)
    {
        $article = new Article(); //モデル名でインスタンスを作成
        $search = $this->$article->search($request);

        //viewに渡す
        return view('top',compact('articles'));
    }
}