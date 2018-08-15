<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\categories;
use App\sub_categories;
use App\helppost;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\AlgoliaIndexController;
use Validator;
//use App\Jobs\notifications;
class helpPostController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('auth');
    }

    public function storeHelpPost(Request $request)
    {
    		//return $request->all();
    		

      try {
        //Notification type
       
        $validator = \Validator::make(request()->all(), [
            'help_post_title' => 'required|string|max:255',
            'help_post_descr' => 'required|string|max:500',
            'from_id' => 'nullable|integer',
            'cat_id' => 'required|integer',
            'sub_cat_id' => 'required|integer',
            'help_post_image' => 'nullable|image|mimes:jpeg,jpg,png|max:8000',
            'private_flag'=> 'nullable|boolean',
            'tags' => 'string|max:500'
        ]);

        if ($validator->fails()) {

            $logObject = new LogsController("","400",$validator->errors());
            $data=$logObject->dataFormattediwthStatus();
            return $data;
        }
        $data = $request->all();
        $helpPostObject= new helppost;
        $helpPostObject->help_post_title=$data['help_post_title'];
        $helpPostObject->help_post_descr=nl2br($data['help_post_descr']);
        $helpPostObject->from_id=\Auth::id();
        $helpPostObject->cat_id=$data['cat_id'];
        $helpPostObject->sub_cat_id=$data['sub_cat_id'];
        $helpPostObject->help_post_image='';
        $helpPostObject->private_flag=false;
        $helpPostObject->tags=$data['tags'];
        $notificationSubCatId=$data['sub_cat_id'];
        if ($helpPostObject->save())
        {
            $logObject = new LogsController("","200","Help Request Submitted");
            $data=$logObject->dataFormattediwthStatus();
            $algoliaObj=new AlgoliaIndexController;
            $response=$algoliaObj->createHelpObjectToIndex($helpPostObject);
            //dispatch notification here type 1
            
            return $response;
        }

    			//return $data;
    }
    catch(\Exception $e)
    {
        $logObject = new LogsController("","400",$e->getMessage());
        $data=$logObject->dataFormattediwthStatus();
        return $data;
    }


    }
    public function helpFeed()
    {
    	return view('helpfeed');
    }
}
