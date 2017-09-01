<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendLikeNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $likeFromName;
     public $posturl;
     public $postOwnerName;
     //public $postOwnerEmail;
    public function __construct($likeFromName,$posturl,$postOwnerName)
    {
        //
        $this->likeFromName=$likeFromName;
        $this->posturl = $posturl;
        $this->postOwnerName = $postOwnerName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$subject = $this->postOwnerName. ", your thank story was liked";
        return $this->markdown('emails/LikeNotification')
        								->subject($subject)	
        								->with('posturl',$this->posturl)
        								->with('postOwnerName',$this->postOwnerName)
        								->with('likeFromName',$this->likeFromName);
    }
}
