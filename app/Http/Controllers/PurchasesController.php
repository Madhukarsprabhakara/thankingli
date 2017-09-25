<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\{Stripe, Charge, Customer};
class PurchasesController extends Controller
{
    //
    public function store() 
    {
    	Stripe::SetApiKey(config('services.stripe.secret'));
    	//dd(request()->all());
    	// $customer = Customer::create([
//     	
//     		'email'=> request('stripeEmail'),
//     		'source' => request('stripeToken')
//     	
//     	
//     	]);
    	
    	Charge::create([
    		
//     		'customer'=> $customer->id,
    		'amount' => 500,
    		'currency'=>'usd',
    		'description'=> 'Coffee at Thankingli',
    		'source' => request('stripeToken')
    		
    	
    	]);
    	
    	\Session::flash('flash_message','Your purchase was successful!');
    	return view('payment-success');
    	//dd(request()->all());
    }
}
