<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\purchase_temps;
use App\purchase_codes;
use App\Mail\SendCoffeeNotification;
use App\User;
class CoffeeCodeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
     public $sessionData, $productId;
    public function __construct($sessionData,$productId)
    {
        //
        $this->sessionData = $sessionData;
        $this->productId=$productId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    	
    	//$sessionId = $this->session_id;
    	$purchaseTemp = purchase_temps::where('session_id',$this->sessionData)->get();
        //dd($purchaseTemp);
        //Generate code

        $rand = rand(1000,99999999);
        //encrypt code
        //$encrypt_rand = encrypt($rand);
        //store the encrypted code in DB
        $purchaseCodeDB = new purchase_codes;
        foreach ($purchaseTemp as $purchaseTempI)
        {
        	//echo $purchaseTempI->session_id;
        	$fromUser = User::where('id',$purchaseTempI->from_id)->first();
        	//dd($fromUser->name);
        	$purchaseCodeDB->shop_id = 1;
        	$purchaseCodeDB->product_id = $this->productId;
        	$purchaseCodeDB->purchase_code = $rand;
        	if ($purchaseTempI->to_id) {
        		$purchaseCodeDB->to_id=$purchaseTempI->to_id;
        		$exists=true;
        	}
        	else
        	{
        		$exists=false;
        	}
       		$purchaseCodeDB->session_id=$purchaseTempI->session_id;
        	$purchaseCodeDB->from_id=$purchaseTempI->from_id;
        	$purchaseCodeDB->to_email = $purchaseTempI->to_email;
        	$purchaseCodeDB->post_id= $purchaseTempI->post_id;
        	$purchaseCodeDB->to_name=	$purchaseTempI->to_name;
        	$purchaseCodeDB->used_code_flag = 0;
        //Send email to receipient with code
        	if($purchaseCodeDB->save())
        	{
        		purchase_temps::where('session_id', $this->sessionData)->delete();
        		\Mail::to($purchaseTempI->to_email)->send(new SendCoffeeNotification($purchaseTempI->to_name,$fromUser->name, $rand, $purchaseTempI->post_id,$exists,$purchaseTempI->from_id ));
        	}
        //delete the temps entry
       }
        
    }
}
