<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCoffeeNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $toName,$fromName,$code,$postId;
    public function __construct($toName,$fromName,$code,$postId)
    {
        //
        $this->toName=$toName;
        $this->fromName=$fromName;
        $this->code=$code;
        $this->postId=$postId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$subject = "You were thanked with a cup of coffee on Thankingli";
    	$urlPost = "http://107.23.241.117/showposts/postid/".$this->postId;
        return $this->markdown('emails/CoffeeNotification')
        								->subject($subject)	
        								->with('toName',$this->toName)
        								->with('fromName',$this->fromName)
        								->with('code',$this->code)
        								->with('url',$urlPost);
    }
}
