<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
	public function __construct() 			//fungsi agar tidak dapat membuka hal web sebelum login
    {
		$this->middleware('auth');
		// $this->middleware(function($request, $next){
		// 	if(Gate::allows('manage-articles')) return $next($request);
		// 	abort(403, 'Anda tidak memiliki cukup hak akses');
		// 	});
	}

    public function articles($id){
    	$hasil = Article::find($id);
    	return view ('Article',['id' => $id]) ->with (compact('hasil'));
    }

    public function all (){
    	// return view ('Blog')
    	$article = Article::all(); 
    	return view('home1',['article' => $article]);
	} 
	
	public function index(){
		$article = Article::all();
		return view('manage',['article' => $article]);
	}
	public function add(){
		return view('addarticle');
	}

	public function create(Request $request){
		Article::create([
		'title' => $request->title,
		'content' => $request->content,
		'imageurl' => $request->image
		]);
		return redirect('/manage');
	}
	public function edit($id){
			$article = Article::find($id);
			return view('editarticle',['article'=>$article]);
	}
	public function update($id, Request $request){
			$article = Article::find($id);
			$article->title = $request->title;
			$article->content = $request->content;
			$article->imageurl = $request->image;
			$article->save();
	return redirect('/manage');
	}
	public function delete($id){
			$article = Article::find($id);
			$article->delete();
			return redirect('/manage');
	}
}
