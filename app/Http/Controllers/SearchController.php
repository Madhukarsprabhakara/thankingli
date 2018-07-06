<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\purchase_codes;
class SearchController extends Controller
{
    //
    
    public function initializeAlgolia()
    {
        // $client = new \AlgoliaSearch\Client('Y21UN54ZV9', '664fd0988cc8d479069e9be490501c16');
        $client = new \AlgoliaSearch\Client('PVRYX70O4F', '71ea536593a3d2b3cc6d7d1f1ef20d4d');
        return $client;

    }
    public function searchName(Request $request)
    {
    		
    		//dd($request);
    		$this->validate(request(), [
            'searchname' => 'required|string|max:35',
        	]);
        
    		$searchNames = User::search($request['searchname'])->paginate(5);
    		
    		
            return $searchNames;
    		
    		return view('search-1-0',compact('searchNames'));
    		//return $searchNames;
    		//return 'madhu';
    		
    		
    	
    }
    public function searchIndex(Request $request)
    {
            $client=$this->initializeAlgolia();

            $indexName='users';
            $index = $client->initIndex($indexName);
            //dd($request);
            $this->validate(request(), [
            'searchname' => 'required|string|max:35',
            ]);
        
            //$searchNames = User::search($request['searchname'])->paginate(5);
            $searchNames = $index->search($request['searchname']);
            
            return $searchNames;
            
            //return view('search-1-0',compact('searchNames'));
            //return $searchNames;
            //return 'madhu';
            
            
        
    }
    public function searchCodes(Request $request)
    {
    
    	$this->validate(request(), [
            'searchcode' => 'required|integer|max:9999',
        	]);
        
    		$searchNames = purchase_codes::search($request['searchcode'])->get();
    	//dd($searchNames);	
    		//echo $searchCode;
    		
    		return view('admin.editable-orders',compact('searchNames'));
    	
    }
    public function indexUsers()
    {
        $client=$this->initializeAlgolia();
        $indexName='users';
        $index = $client->initIndex($indexName);



        $users=User::all();
        foreach ($users as $user) 
        {
            $index_data[]=$user;
        }
        $res=$index->addObjects($index_data);
        return $res;
    }
}
