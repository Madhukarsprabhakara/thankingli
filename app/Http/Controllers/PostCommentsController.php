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
        	$comment->comment_text = nl2br($request->commenttext);
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
    				$privacy=user_thanks::where('post_thank_id',$postid )
          					->get(['private','from_id'])->first();
          	
          			if(!$privacy->private)
    				{
    		
    					$CommentURL = "https://www.thankingli.com/showposts/postid/".$postid;
    			
    				}
    				else
    				{
    					//return redirect('/to/'.$postid);
    					if (\Auth::id()==$privacy->from_id)
    					{
    						$CommentURL = "https://www.thankingli.com/to/".$postid;	
    					}
    					else
    					{
    						$CommentURL = "https://www.thankingli.com/from/".$postid;
    					}
    				}
    				
    				
    				dispatch(new SendCommentNotificationEmails($postid,$CommentURL,$fromId));
    				return back();
    			}
    		}
    	}
    	else
    	{
    	
    		return back()->withErrors('You must be logged in to comment');
    	
    	}
    
    }
    public function storev3(Request $request,$postid)
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
            $comment->comment_text = nl2br($request->commenttext);
            if ($comment->save())
            {
                
                $ThankPostId=user_thanks::where('post_thank_id',$postid)->get(['from_id'])->first();
                if ($ThankPostId->from_id == $user->id)
                {
                    //don't send email here
                    
                    return 200;
                }
                else
                {
                    //send email here
                    //dd($ThankPostId->from_id);
                    $fromId = $user->id;
                    $privacy=user_thanks::where('post_thank_id',$postid )
                            ->get(['private','from_id'])->first();
            
                    if(!$privacy->private)
                    {
            
                        $CommentURL = "https://www.thankingli.com/showposts/postid/".$postid;
                
                    }
                    else
                    {
                        //return redirect('/to/'.$postid);
                        if (\Auth::id()==$privacy->from_id)
                        {
                            $CommentURL = "https://www.thankingli.com/to/".$postid; 
                        }
                        else
                        {
                            $CommentURL = "https://www.thankingli.com/from/".$postid;
                        }
                    }
                    
                    
                    //dispatch(new SendCommentNotificationEmails($postid,$CommentURL,$fromId));
                    return 200;
                }
            }
        }
        else
        {
        
            return back()->withErrors('You must be logged in to comment');
        
        }
    
    }
    public function toSlack($notifiable)
    {
        
    }
}
