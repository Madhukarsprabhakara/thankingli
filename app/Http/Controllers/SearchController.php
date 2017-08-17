<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class SearchController extends Controller
{
    //
    
    public function searchName(Request $request)
    {
    		
    		$this->validate(request(), [
            'searchname' => 'required|string|max:35',
        	]);
        
    		$searchNames = User::search($request['searchname'])->paginate(5);
    		
    		
    		
    		return view('search',compact('searchNames'));
    		
    		
    	
    }
}
