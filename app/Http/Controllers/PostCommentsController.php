<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_thanks_comments;
use App\user_thanks;
use App\Jobs\SendCommentNotificationEmails;
class PostCommentsController extends Controller
{
    //
    public function store(Request $request,$postid)
    {
    	if($user=\Auth::user())
    	{
    		$this->validate(request(), [
            	'commenttext' => 'required|string|max:400',
            
        	]);
        	$comment = new user_thanks_comments;
        	$comment->id = $user->id;
        	$comment->post_id=$postid;
        	$comment->comment_name = $user->name;
        	$comment->comment_text = $request->commenttext;
        	if ($comment->save())
        	{
        		
        		$ThankPostId=user_thanks::where('post_thank_id',$postid)->get(['from_id'])->first();
        		if ($ThankPostId->from_id == $user->id)
        		{
        			//don't send email here
        			
    				return back();
    			}
    			else
    			{
    				//send email here
    				//dd($ThankPostId->from_id);
    				$fromId = $user->id;
    				$CommentURL = "https://www.thankingli.com/showposts/postid/".$postid;
    				dispatch(new SendCommentNotificationEmails($postid,$CommentURL,$fromId));
    				return back();
    			}
    		}
    	}
    	else
    	{
    	
    		echo "You must be logged in to comment";
    	
    	}
    
    }
}
