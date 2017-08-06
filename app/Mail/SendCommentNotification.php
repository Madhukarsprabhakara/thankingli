<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCommentNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $name;
     public $CommentURL;
    public function __construct($name,$CommentURL)
    {
        //
        $this->name = $name;
        $this->CommentURL = $CommentURL;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$subject = "There are new comments on your post";
        return $this->markdown('emails/CommentNotification')
        			->subject($subject)
        			->with('name',$this->name)
        			->with('CommentURL',$this->CommentURL);
    }
}
