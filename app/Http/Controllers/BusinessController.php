<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\purchase_temps;
use App\purchase_codes;
use App\products;
class BusinessController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function loggedInCheck() 
    {
  		$id=\Auth::id();
    	$businessCheck=User::with('roles')->find($id);
    	 
    	 if ( $businessCheck['roles']->isEmpty())
    	 {
    	 	return 1;
    	 	//echo "You don't have permission to access the business page";
    	 }
    	 else
    	 {
    	 	 if ($businessCheck['roles'][0]->id == 2 && $businessCheck['roles'][0]->name == 'business')
    	  	 {
    	  			return 2;
    	  			//return view('admin.index',compact('allOrders'));
    	  
    	  	 }
    	  	 else
    	  	 {
    	  			return 3;
    	  		 	//echo "You are not authorized to access this page, please contact admin to start a business account";
    	  	
    	   	  }
    	}
 	}
    public function index()
    {
    	//echo "For business users only";
    	$allOrders = purchase_codes::where('shop_id',1)->get();
    	//dd($allOrders);
    	$status=self::loggedInCheck();
    	if ($status == 2)
    	{
    		return view('admin.editable-orders',compact('allOrders'));
    	}
    	elseif ($status == 1)
    	{
    		echo "You don't have permission to access the business page";
    	}
    	else
    	{
    		echo "You are not authorized to access this page, please contact admin to start a business account";
    	}
    }
    
    public function orders()
    {
    	
    	$allOrders = purchase_codes::where('shop_id',1)->get();
    	//BusinessController::loggedInCheck();
    	$status=self::loggedInCheck();
    	if ($status == 2)
    	{
    		return view('admin.orders',compact('allOrders'));
    	}
    	elseif ($status == 1)
    	{
    		echo "You don't have permission to access the business page";
    	}
    	else
    	{
    		echo "You are not authorized to access this page, please contact admin to start a business account";
    	}
    	//	return view('admin.orders');
    	
    	
    }
    public function markUsed(Request $request,$code)
    {
    	
    	try {
    		$status=self::loggedInCheck();
    		
    		if ($status == 2)
    		{
    			purchase_codes::where('purchase_code', $code)
          		
          		->update(['used_code_flag' => 1,
          					'shop_id' => \Auth::id()
          		
          		
          		]);
          		
          		$allOrders = purchase_codes::where('shop_id',1)->get();
    			return view('admin.editable-orders',compact('allOrders'));
    		}
    	}
    	
    	catch(\Exception $e)
    	{
    		$e->getMessage();
    	}	
    }
    public function searchCodes(Request $request)
    {
    	
    	
    	$status=self::loggedInCheck();
    	if ($status == 2)
    	{
    		$this->validate(request(), [
            'searchcode' => 'required|string|max:35',
        	]);
        
    		$searchNames = purchase_codes::search($request['searchcode'])->paginate(5);
    		$product = products::where('id',$searchNames[0]->product_id)->get()->first();
    		$productName = $product->product_name;
    		$productPrice = $product->price;
    		dd($productPrice);
    		//echo $searchCode;
    		
    		return view('admin.editable-orders',compact('searchNames'))
    					->with('productName',$productName)
						->with('price',$productPrice);
    	
    	}
    	elseif ($status == 1)
    	{
    		echo "You don't have permission to access the business page";
    	}
    	else
    	{
    		echo "You are not authorized to access this page, please contact admin to start a business account";
    	}
    	
    	
    	
    }
    
}
