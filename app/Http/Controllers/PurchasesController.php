<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\{Stripe, Charge, Customer};
use App\Jobs\CoffeeCodeJob;
use App\products; 
class PurchasesController extends Controller
{
    
    
    //Dependencies for transaction
    //1 - product cost
    //2 - In what currency
    //3 - Description (Coffee at Thankingli)
    //4- stripe token
    //Product object consists of 
    
    
    public function store(Request $request) 
    {
    	$sessionData = $request->session()->getId();
    	Stripe::SetApiKey(config('services.stripe.secret'));
    	//dd(request()->all());
    	// $customer = Customer::create([
//     	
//     		'email'=> request('stripeEmail'),
//     		'source' => request('stripeToken')
//     	
//     	
//     	]);
    	
    	try
    	{
    		$price = products::where('id',$request['productId'])->first();
    		$actPrice= $price->price * 100;
    	}
    	catch(\Exception $e)
    	{
    		return back()->withErrors($e->getMessage());
    	}
    	
    	try 
    	{
    		if($confirmId=Charge::create([
    		
//     		'customer'=> $customer->id,
    			'amount' => $actPrice,
    			'currency'=>'usd',
    			'receipt_email' => request('stripeEmail'),
    			'description'=> 'Coffee at Thankingli',
    			'source' => request('stripeToken')
    		
    	
    		]))
    	
    		{
    	//dd($confirmId);
    			dispatch(new CoffeeCodeJob($sessionData,$request['productId']));
    	
    	//get the shop id - hardcoded for now
    	
    	
    	//get to_id or to_email - from the temps table
    	
    	//generate unique code and encrypt it and store it 
    	
    		\Session::flash('flash_message','Your "Thank coffee" is on it\'s way!');
    	//$request->session()->regenerate();
    		return view('payment-success');
    	
    		}
    		else
    		{
    			\Session::flash('flash_message','We apologize something went wrong, please try again. Call +17239267513 to report problems');
    			return back();
    		
    		}
    	}
    	catch(\Exception $e)
    	{
    		//echo $e->getMessage();
    		return back()->withErrors($e->getMessage());
    	}
    	
    	
    	//dd(request()->all());
    }
    
}
