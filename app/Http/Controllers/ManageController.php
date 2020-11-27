<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Manage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use App\Article;
use PDF;

class ManageController extends Controller
{
    public function __construct() 			//fungsi agar tidak dapat membuka hal web sebelum login
    {
		// $this->middleware('auth');
		$this->middleware(function($request, $next){
			if(Gate::allows('manage-articles')) return $next($request);
			abort(403, 'Anda tidak memiliki cukup hak akses');
			});
	}
    public function index(){
		$article = Article::all();
		return view('manage',['article' => $article]);
	}
	public function add(){
		return view('addarticle');
	}
	public function create(Request $request){
		if($request->file('image')){
			$image_name = $request->file('image')->store('images','public');
		}
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

			if($article->imageurl && 
			file_exists(storage_path('app/public/' . $article->imageurl)))
			{ 	
				\Storage::delete('public/'.$article->imageurl);
			
			}
			$image_name = $request->file('image')->store('images', 'public');
			$article->imageurl = $image_name;
		

			// $article->imageurl = $request->image;
			$article->save();
	return redirect('/manage');
	}
	public function delete($id){
			$article = Article::find($id);
			$article->delete();
			return redirect('/manage');
	}
	public function cetak_pdf(){
		$article = Article::all();
		$pdf = PDF::loadview('articles_pdf',['article'=>$article]);
		return $pdf->stream();
		}
}
