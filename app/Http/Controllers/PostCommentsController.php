<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_thanks_comments;
class PostCommentsController extends Controller
{
    //
    public function store(Request $request,$postid)
    {
    	if($user=\Auth::user())
    	{
    		$this->validate(request(), [
            	'commenttext' => 'required|string|max:200',
            
        	]);
        	$comment = new user_thanks_comments;
        	$comment->id = $user->id;
        	$comment->post_id=$postid;
        	$comment->comment_name = $user->name;
        	$comment->comment_text = $request->commenttext;
        	if ($comment->save())
        	{
    			return back();
    		}
    	}
    	else
    	{
    	
    		echo "You must be logged in to comment";
    	
    	}
    
    }
}
