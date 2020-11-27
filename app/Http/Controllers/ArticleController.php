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
		// $this->middleware('auth');
		$this->middleware(function($request, $next){
			if(Gate::allows('user-display')) return $next($request);
			abort(403, 'Anda tidak memiliki cukup hak akses');
			});
	}
    public function articles($id){
    	$hasil = Article::find($id);
    	return view ('Article',['id' => $id]) ->with (compact('hasil'));
    }

    public function all (){
    	// return view ('Blog')
    	$article = Article::all(); 
    	return view('bootstrap.home1',['article' => $article]);
	} 
	
	public function index(){
		$article = Article::all();
		return view('manage',['article' => $article]);
	}
}
