<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
     public function aboutMe()
    {
    	return view('AboutMe');
    }
}
