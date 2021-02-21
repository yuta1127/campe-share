<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function search(Request $request)
    {
        
        $articles = Article::paginate(10);;

        return view('top',compact('articles'));
    }
}
