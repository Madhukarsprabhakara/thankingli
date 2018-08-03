<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\helppost;
use App\helpInbox;
use App\helpInboxMsgReplies;
use App\Http\Controllers\LogsController;
class helpInboxController extends Controller
{
    //

	public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('auth');
    }
    public function storeHelpResponse(Request $request)
    {
    	try {
    		$this->validate(request(), [
            'belongs_id' => 'nullable|integer',
            'from_id' => 'nullable|integer',
            'from_name' => 'nullable|string',
            'help_post_id' => 'required|integer',
            'help_post_title' => 'nullable|string',
            'help_image' => 'nullable|image|mimes:jpeg,jpg,png|max:8000',
            'help_text'=> 'required|max:5000',
            //'tags' => 'string|max:500'
        ]);


    			$data = $request->all();
    			$helpPost =  helppost::find($data['help_post_id']);
    			$user=User::find($helpPost['from_id']);

    			$helpInboxObject= new helpInbox;
    			$helpInboxObject->belongs_id=$helpPost['from_id'];
    			$helpInboxObject->from_id=\Auth::id();
    			$helpInboxObject->from_name=\Auth::user()->name;
    			$helpInboxObject->help_post_id=$data['help_post_id'];
    			$helpInboxObject->help_post_title=$helpPost['help_post_title'];
    			$helpInboxObject->help_text=nl2br($data['help_text']);
                if ($helpPost['from_id']!=\Auth::id())
                {
                        $helpInboxObject->belongs_name=$user->name;
                }
                else
                {
                        $helpInboxObject->belongs_name='You';   
                }
                
    			if (isset($data['help_image']))
    			{
    				$helpInboxObject->help_image=$data['help_image'];
    			}
    			
    			if ($helpInboxObject->save())
    			{
    				$logObject = new LogsController("","200","Help Response Submitted");
    				$data=$logObject->dataFormattediwthStatus();
    				return $data;
    			}
    	}
    	catch (\Exception $e)
    	{
    			$logObject = new LogsController("","400",$e->getMessage());
            	$data=$logObject->dataFormattediwthStatus();
            	return $data;
    	}
    }
    protected function getHelpResponses(Request $request)
    {
    	try {
            $commentsOnReplies=array();
            $user_id=\Auth::id();
            //$inboxFeed=helpInbox::where('belongs_id',$user_id)->get();
            $allMessages= \DB::table('help_inboxes')->where('belongs_id',$user_id)->orWhere('from_id',$user_id)->orderBy('created_at','desc')->get();
            //return $allMessages;
            foreach ($allMessages as $message)
            {
                //$message=json_decode($message,);
                //return $message->in_id; 
                $intermediate=helpInboxMsgReplies::where('in_id',$message->in_id)->get();
                foreach ($intermediate as $item)
                {
                    array_push($commentsOnReplies, $item);
                }

                //array_push($commentsOnReplies, $commentsOnRepliesFromDb);
            }
            
            $distinctMessages=$allMessages->groupBy('help_post_id');
            // $result['distinctMessages']=$distinctMessages;
            // $result['commentsOnReplies']=$commentsOnReplies;
            $result=compact('distinctMessages','commentsOnReplies');
            return $result;

        }
        catch (\Exception $e)
        {
                $logObject = new LogsController("","400",$e->getMessage());
                $data=$logObject->dataFormattediwthStatus();
                return $data;
        }
    }
    protected function storeHelpPostMsgResponse(Request $request)
    {
    		try {
    			$user_id=\Auth::id();
    			$data=$request->all();
    			$inboxMsgRepObj=new helpInboxMsgReplies;
    			$inboxMsgRepObj->id=$user_id;
    			$inboxMsgRepObj->in_id=$data['in_id'];
    			$inboxMsgRepObj->help_post_id=$data['help_post_id'];
    			$inboxMsgRepObj->comment_from_name=\Auth::user()->name;
    			$inboxMsgRepObj->comment_text=$data['commenttext'];
    			if ($inboxMsgRepObj->save())
    			{
    				$logObject = new LogsController("","200","Replied Successfully");
            		$data=$logObject->dataFormattediwthStatus();
            		return $data;
    			}

    		}
    		catch (\Exception $e)
    		{
    				$logObject = new LogsController("","400",$e->getMessage());
            		$data=$logObject->dataFormattediwthStatus();
            		return $data;
    		}
    }
}
