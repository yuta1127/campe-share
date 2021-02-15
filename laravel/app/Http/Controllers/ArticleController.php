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
    public function index()
    {
        $articles = DB::table('articles')
        ->select('id','title','content','created_at')
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
        $article = DB::table('articles')
        ->find($id);

        return view('articles.edit',['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        $article = DB::table('articles')
        ->find($id);

        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();
        return redirect()->route('articles.show');
    }

    public function destroy($id)
    {
        //
        $article = DB::table('articles')
        ->find($id);
        $article->delete();

        return redirect()->route('articles.show');
    }
}
