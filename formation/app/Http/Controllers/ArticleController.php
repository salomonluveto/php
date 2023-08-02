<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){

    $articles = [
        1=>'formation node js',
        2=> 'formation php',
        3=> 'formation node js'
];
//return response()->json($articles);
       return view('articles',['articles'=>$articles]);
    }
    public function show ($id) {
        $articles = [
            1=>'formation node js',
            2=> 'formation php',
            3=> 'formation node js'
    ];
    $article = $articles[$id];
        return view('single',compact('article'));
    }
}
