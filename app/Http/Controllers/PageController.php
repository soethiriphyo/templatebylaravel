<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homefun($value='')
    {
    	return view('homepage');
    }
    public function aboutfun($value='')
    {
    	return view('aboutpage');
    	
    }

    public function samplepostfun($value='')
    {
    	return view('samplepostpage');
    	
    }


    public function contactfun($value='')
    {
    	return view('contactpage');
    	
    }
}

