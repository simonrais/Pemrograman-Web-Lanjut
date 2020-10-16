<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function articles($id){
    	$hasil = Article::find($id);
    	return view ('Article',['id' => $id]) ->with (compact('hasil'));
    }

    public function all (){
    	// return view ('Blog')
    	$article = Article::all(); 
    	return view('home1',['article' => $article]);
    } 
}

