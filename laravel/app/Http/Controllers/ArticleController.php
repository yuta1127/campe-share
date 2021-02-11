<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{

     public function index()
    {
        $articles = DB::table('articles')
        ->select('title','content')
        ->get();

        return view('articles.index',compact('articles'));
    }
}
