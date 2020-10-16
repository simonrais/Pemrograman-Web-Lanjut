<?php

//  PRAKTIKUM 2 CONTROLLER WEB FRAMEWORK LARAVEL  

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello(){
    	return ('Selamat Datang');
    }
    public function about(){
    	return ('Nama : Simon Rais Sihombing <br> Nim : 1931710183');
    }
    public function articles($id){
    	return ('Halaman artikel dengan id '.$id);
    }
}