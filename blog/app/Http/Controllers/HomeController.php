<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Article;
use \Cache;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $articles = \App\Article::all();
        $value = Cache::rememberForever('articles',function(){
            return \App\Article::all();
        });
        $page = 'Artikel';
        return view('home.homeboot',['liat'=>$articles]);
    }
}
