<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\purchase_codes;
class SearchController extends Controller
{
    //
    
    public function searchName(Request $request)
    {
    		
    		//dd($request);
    		$this->validate(request(), [
            'searchname' => 'required|string|max:35',
        	]);
        
    		$searchNames = User::search($request['searchname'])->paginate(5);
    		
    		
    		
    		return view('search-1-0',compact('searchNames'));
    		//return $searchNames;
    		//return 'madhu';
    		
    		
    	
    }
    public function searchCodes(Request $request)
    {
    
    	$this->validate(request(), [
            'searchcode' => 'required|string|max:35',
        	]);
        
    		$searchNames = purchase_codes::search($request['searchcode'])->paginate(5);
    		
    		//dd($searchNames);
    		//echo $searchCode;
    		
    		return view('admin.editable-orders',compact('searchNames'));
    	
    }
}
