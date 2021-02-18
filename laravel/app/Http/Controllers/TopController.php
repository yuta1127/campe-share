<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function top(Request $request)
    {
        $search = $request->input('search');

        //検索フォーム用
        $query = DB::table('articles');
 
        if($search !== null){
            //全角スペースを半角に
            $search_split = mb_convert_kana($search,'s');
 
            //空白で区切る
            $search_split2 = preg_split('/[\s]+/',$search_split,-1,PREG_SPLIT_NO_EMPTY);
 
            //単語をループで回す
            foreach($search_split2 as $value)
            {
                $query->where('title','like','%'.$value.'%');
            }
 
        }

             $articles = Article::paginate(10);;
            return view('top',compact('articles'));
    }
}
