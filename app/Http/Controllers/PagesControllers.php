<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function home()
    {
    	return view('pages.welcome');
    }

    public function tarif()
    {
    	return view('pages.tarif');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function blog()
    {
    	return view('pages.blog');
    }
    

    public function contact()
    {
    	return view('pages.contact');
    }
}
