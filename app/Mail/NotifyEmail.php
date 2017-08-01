<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $user;
     public $url;
     public $name;
    public function __construct($user,$url,$name)
    {
        //
        $this->user=$user;
        $this->url=$url;
        $this->name=$name;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$subject = $this->name .", you were thanked by " .$this->user->name. " on, Thankingli!";
        return $this->markdown('emails/NotifyEmail',compact('user'))
        			->subject($subject)
        			->with('name',$this->name)
        			->with('url',$this->url);
    }
}
