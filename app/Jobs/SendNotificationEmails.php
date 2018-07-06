<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\NotifyEmail;
class SendNotificationEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
     protected $user;
     protected $url;
     protected $name;
     protected $email;
    public function __construct($user,$url,$name,$email)
    {
        //
        $this->user = $user;
        $this->url = $url;
        $this->name = $name;
        $this->email=$email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        
        \Mail::to($this->email)->send(new NotifyEmail($this->user,$this->url,$this->name));
    }
}
