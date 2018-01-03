<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomSessionsController extends Controller
{
    //
    public function create()
    {
    	return view('auth.login-1-0');
    }	
}
