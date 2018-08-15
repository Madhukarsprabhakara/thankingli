<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class helpPostResponseNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $subject,$toName,$fromName,$helpPostTitle,$helpResponse;
    public function __construct($subject,$toName,$fromName,$helpPostTitle,$helpResponse)
    {
        //
        $this->subject=$subject;
        $this->toName=$toName;
        $this->fromName=$fromName;
        $this->helpPostTitle=$helpPostTitle;
        $this->helpResponse=$helpResponse;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $url="https://www.thankingli.com/profile-editv3";
        return $this->markdown('emails.helpPostResponseNotification')
                    ->subject($this->subject)
                    ->with('name',$this->toName)
                    ->with('fromname',$this->fromName)
                    ->with('help_post_title',$this->helpPostTitle)
                    ->with('url',$url);
    }
}
