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
}
