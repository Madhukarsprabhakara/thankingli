<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\RemindThanksMSGToNS;
use App\user_thanks;
use App\User;
class SendThankMsgRemindToNS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SendEmailNotif:RemindToNS';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends emai notifications to people who have not seen the thank posts';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $userThanks = user_thanks::where('to_id',0)->get();
    	
    	foreach ($userThanks as $userThank)
    	{
    			
				if ($userThank->to_email)
				{
					echo "$userThank->to_email";
					echo "\n";
					$url="http://www.thankingli.com/emaillink/uid/".$userThank->from_id."/postid/".$userThank->post_thank_id."?redirect-url=/registered/uid/".$userThank->from_id."/postid/".$userThank->post_thank_id;
				//dd($userEmail = user::where('id',$userThank->to_id)->get(['email'])->first());
					$userEmail = $userThank->to_email;
					$userTMessage = $userThank->thank_description;
				//echo "$userEmail";
					$FromUserName = $userThank->from_name;
					$ToUserName = $userThank->to_name;
					
					//\Mail::to($userEmail)->send(new RemindThanksMSGToNS($url,$ToUserName,$FromUserName,$userEmail,$userTMessage));
    			}
    			// else
//     			{
//     				echo "Null";
//     				echo "\n";
//     			}
    	}
        
    }
}
