<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class CustomRegistrationController extends Controller
{
    //
    
    public function RegControlWithQueryParam(Request $request)
    {
    	//dd($request['referer-url']);
    	$this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
         $user=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        auth()->login($user);
    	return redirect($request['referer-url']);
    
    }
    //public function 
}
