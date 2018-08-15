<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AnyNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $subCatName,$userName;
    public function __construct($subCatName,$userName)
    {
        //
        $this->subCatName=$subCatName;
        $this->userName=$userName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'A Startup just raised a help request in one of your skills';
        $url="https://www.thankingli.com/helpsomeone";
        return $this->markdown('emails.anynotification')
                    ->subject($subject)
                    ->with('name',$this->userName)
                    ->with('sub_cat_name',$this->subCatName)
                    ->with('url',$url);
    }
}
