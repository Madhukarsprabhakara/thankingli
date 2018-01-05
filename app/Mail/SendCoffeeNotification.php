<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\user_thanks;
class SendCoffeeNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $toName,$fromName,$code,$postId,$exists,$from_id;
    public function __construct($toName,$fromName,$code,$postId,$exists,$from_id)
    {
        //
        $this->toName=$toName;
        $this->fromName=$fromName;
        $this->code=$code;
        $this->postId=$postId;
        $this->exists=$exists;
        $this->from_id=$from_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$subject = "You were thanked with a cup of coffee on Thankingli";
    	$privacy=user_thanks::where('from_id', $this->from_id)
          	->where('post_thank_id',$this->postId )
          	->get(['private'])->first();
          $serverUrl = 'http://test.thankingli.com';	
          	if(!$privacy->private && $this->exists)
    		{
    				
    				$urlPost = $serverUrl."/showposts/postid/".$this->postId;
    			
    		}
    		else if (!$privacy->private && !$this->exists)
    		{
    			$urlPost=$serverUrl."/emaillink/uid/".$this->from_id."/postid/".$this->postId."?redirect-url=/registered/uid/".$this->from_id."/postid/".$this->postId;
    		}
    		else if ($privacy->private && $this->exists)
    		{
    			$urlPost=$serverUrl."/to/".$this->postId;
    		}
    		else
    		{
    				$urlPost=$serverUrl."/emaillink/uid/".$this->from_id."/postid/".$this->postId."?redirect-url=/registered/uid/".$this->from_id."/postid/".$this->postId;	
    		}
    	
        return $this->markdown('emails/CoffeeNotification')
        								->subject($subject)	
        								->with('toName',$this->toName)
        								->with('fromName',$this->fromName)
        								->with('code',$this->code)
        								->with('url',$urlPost);
    }
}
