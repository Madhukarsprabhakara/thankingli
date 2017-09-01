<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\SendLikeNotification;
class SendLikeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
     public $likeFromName;
     public $posturl;
     public $postOwnerName;
     public $postOwnerEmail;
     
    public function __construct($likeFromName,$posturl,$postOwnerName,$postOwnerEmail)
    {
        //
        $this->likeFromName=$likeFromName;
        $this->posturl = $posturl;
        $this->postOwnerName = $postOwnerName;
        $this->postOwnerEmail = $postOwnerEmail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        //dd($this->postOwnerName);
        //$subject = $this->postOwnerName . "your thank story was liked";
        \Mail::to($this->postOwnerEmail)->send(new SendLikeNotification($this->likeFromName,$this->posturl,$this->postOwnerName ));
        								
    }
}
