<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function __construct() 			//fungsi agar tidak dapat membuka hal web sebelum login
    {
		// $this->middleware('auth');
		$this->middleware(function($request, $next){
			if(Gate::allows('manage-articles')) return $next($request);
			abort(403, 'Anda tidak memiliki cukup hak akses');
			});
	}
    public function index()
    {
        $article = Article::all();
        return view('manageuser',['user' => $user]);
    }
    public function add()
    {
        return view('adduser');
    }
    public function create(Request $request){
		Article::create([
		'id' => $request->title,
		'name' => $request->content,
		'email' => $request->image
		]);
		return redirect('/manageuser');
    }
    public function edit($id){
        $user = User::find($id);
        return view('edituser',['user'=>$user]);
    }
    public function update($id, Request $request){
        $user = User::find($id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/manageuser');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/manageuser');
}
}
