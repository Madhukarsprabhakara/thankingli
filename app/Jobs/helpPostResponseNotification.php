<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\helpPostResponseNotificationMail;
use App\Http\Controllers\LogsController;
use App\User;
class helpPostResponseNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $type,$fromName,$fromId,$helpPostTitle, $InboxId, $helpResponse,$toId;
    public function __construct($type,$toId,$fromName,$fromId,$helpPostTitle, $InboxId, $helpResponse)
    {
        //
        $this->type=$type;
        $this->fromName=$fromName;
        $this->fromId=$fromId;
        $this->toId=$toId;
        $this->helpPostTitle=$helpPostTitle;
        $this->InboxId=$InboxId;
        $this->helpResponse=$helpResponse;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //type 1 for Inbox replies, type 2 for private comments  on the replies
        $user=User::find($this->toId);
        switch ($this->type) {
                case 1:
                        $subject='There is a response on your help request';
                        \Mail::to($user->email)->send(new helpPostResponseNotificationMail($subject,$user->name,$this->fromName,$this->helpPostTitle,$this->helpResponse));
                        break;
                
                case 2:
                      $subject='There are comments on your help request';
                        \Mail::to($user->email)->send(new helpPostResponseNotificationMail($subject,$user->name,$this->fromName,$this->helpPostTitle,$this->helpResponse));  
                break;


                default:
                return "Not the right flag";
                }
        

    }
}
