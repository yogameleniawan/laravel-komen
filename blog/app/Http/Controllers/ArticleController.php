<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use Faker\Factory as Faker;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function article($id)
    {
        $hasil = Article::find($id);
        $komen = Comment::all();
        return view('post.post',['hasil'=>$hasil,'komen'=>$komen,'id'=>$id]);
    }

    public function insertData(Request $req, $id)
    {
        $faker = Faker::create();
        $hasil = Article::find($id);
        $user = new Comment();
        $user->name = $req->nama;
        $user->comment = $req->komentar;
        $user->id_article = $req->id;
        $user->profile_photo = $faker->imageUrl($width = 50, $height = 50);
        $user->save();
        return redirect()->action('ArticleController@article',['id'=>$id]);
    }

}
