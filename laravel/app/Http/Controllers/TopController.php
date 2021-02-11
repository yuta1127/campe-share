<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function top()
    {
        {
            $articles = DB::table('articles')
            ->select('title','content','created_at')
            ->get();

            return view('top',compact('articles'));
        }
    }
}
