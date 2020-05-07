<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactControllers extends Controller
{
    public function create()
    {
    	return view('pages.contact');
    }
}
