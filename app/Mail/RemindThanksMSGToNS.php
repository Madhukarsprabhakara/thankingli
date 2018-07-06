<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\user_thanks;
use App\Users;
class RemindThanksMSGToNS extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $url;
     public $ToUserName;
     public $FromUserName;
     public $userEmail;
     public $userTMessage;
    public function __construct($url,$ToUserName,$FromUserName,$userEmail,$userTMessage)
    {
        //
        $this->url = $url;
        $this->ToUserName = $ToUserName;
        $this->FromUserName = $FromUserName;
        $this->userEmail = $userEmail;
        $this->userTMessage = $userTMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$subject = $this->FromUserName . ' had thanked you a few days ago';
        return $this->markdown('emails/RemindThanksMSG-NS')
        			->subject($subject)
        			->with('url',$this->url)
        			->with('ToUserName',$this->ToUserName)
        			->with('FromUserName',$this->FromUserName)
        			->with('userTMessage',$this->userTMessage);
        			
    }
}
