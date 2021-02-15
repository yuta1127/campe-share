<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        //dd($search);

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

        $articles = $query->select('id','title','content','created_at')
        ->get();

        return view('articles.index',compact('articles'));
    }

    public function show($id)
    {
        $article = DB::table('articles')
        ->find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit',['article' => $article]);
    }

    public function update(Request $request,$id)
    {
        $article = Article::find($id);

        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();
        return redirect('articles');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('articles');
    }
}
