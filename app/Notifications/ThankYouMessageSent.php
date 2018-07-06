<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
class ThankYouMessageSent extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $user;
    public $url;
    public $name;
    public $from_name;
    public function __construct($user,$url,$name,$from_name)
    {
        //
        $this->user= $user;
        $this->url = $url;
        $this->name=$name;
        $this->from_name=$from_name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    public function toSlack($notifiable)
    {
        return (new SlackMessage)
                ->success()
                ->content('Hey '. $this->name.', '. $this->from_name .' thanked you on thankingli '.$this->url);
    }
    
}
