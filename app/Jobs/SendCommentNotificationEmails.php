<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\user_thanks_comments;
use App\user_thanks;
use App\User;
use App\Mail\SendCommentNotification;
class SendCommentNotificationEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
     protected $postid;
     protected $CommentURL;
     protected $fromId;
    public function __construct($postid,$CommentURL,$fromId)
    {
        
        $this->postid = $postid;
        $this->CommentURL = $CommentURL;
        $this->fromId = $fromId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        //$CommentIds = user_thanks_comments::select('id')->distinct()->where('post_id',$this->postid)->get();
        $CommentIds = user_thanks_comments::distinct()->select('id')->where('post_id',$this->postid)->groupBy('id')->get();
        foreach ($CommentIds as $CommentId)
        {
        	if ($CommentId->id == $this->fromId)
        	{
        		//do nothing
        	}
        	else
        	{
        		$user = User::where('id',$CommentId->id)->get(['email','name'])->first();	 
        		\Mail::to($user->email)->send(new SendCommentNotification($user->name,$this->CommentURL));
        		
        		
        	}
        
        
        }
        		$userPostId = user_thanks::where('post_thank_id',$this->postid)->get(['from_id'])->first();
        		$user = User::where('id',$userPostId->from_id)->get(['email','name'])->first();
        		\Mail::to($user->email)->send(new SendCommentNotification($user->name,$this->CommentURL));
       
    }
}
