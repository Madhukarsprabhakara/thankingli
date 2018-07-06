<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Jobs\SendWelcomeToThankingliEmail;
use App\reg_url_links;
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
        try {
        reg_url_links::where('url', $request['referer-url'])
          		
          		->update(['used' => 1,
          					'user_id' => \Auth::id()
          					
          		
          		
          		]);
          	}
          	catch(\Exception $e)
          	{
          		back()->withErrors($e->getMessage());
          	}
        //auth()->login($user);
        dispatch(new SendWelcomeToThankingliEmail($user));
        return redirect($request['referer-url']);

    }
    public function create()
    {
    
    		return view('auth.register-1-0');
    
    }
    //public function 
}
