<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeToThankingli extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $user;
    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$postsUrl = "https://www.thankingli.com/thankfeed";
    	$subject = $this->user->name.", Welcome to thankingli";
        return $this->markdown('emails/WelcomeToThankingli')
        			->subject($subject)
        			->with('name',$this->user->name)
        			->with('url',$postsUrl);
    }
}
