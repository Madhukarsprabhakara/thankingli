<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profiles;
use App\profile_skills;
use App\Http\Controllers\LogsController;
use App\categories;
use App\sub_categories;
use Closure;
use Image;
class ProfileController extends Controller
{
    //

    protected function getUData()
    {
    	try {
    		$user_id=\Auth::id();
    		$user_name=\Auth::user()->name;
    		$user_email=\Auth::user()->email;
    		$profileObj=profiles::find($user_id);
    		$profileObj['name']=$user_name;
    		$profileObj['email']=$user_email;
    		$logObject = new LogsController($profileObj,"200","Got U Data");	
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    	catch(\Exception $e)
    	{
    		$logObject = new LogsController("","400",$e->getMessage());
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    }
    protected function getSData()
    {
    	try {
    		$result=array();
    		$user_id=\Auth::id();
    		$user_name=\Auth::user()->name;
    		$user_email=\Auth::user()->email;
    		$profiles=profile_skills::where('id',$user_id)->get();
    		foreach ($profiles as $profile)
    		{
    			$result['cat_id'][]=$profile->cat_id;
    			$result['sub_cat_id'][]=$profile->sub_cat_id;
    			$result['experience']=$profile->experience;
    		}
    		$result['cat_id']=array_unique($result['cat_id']);
    		$profileObj['skills_info']=$result;
    		$profileObj['name']=$user_name;
    		$logObject = new LogsController($profileObj,"200","Got U Data");	
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    	catch(\Exception $e)
    	{
    		$logObject = new LogsController("","400",$e->getMessage());
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    }
    protected function storeProfileInfo(Request $request)
    {
    	try {

    		$imageLoc = '/Applications/XAMPP/xamppfiles/thankingli/storage/app/thankingli-images/';
    		$user_id = \Auth::id();
    		
    		$this->validate(request(), [
    			'name' => 'nullable|string|max:255',
    			'company' => 'nullable|string|max:255',
    			'position' => 'nullable|string|max:255',
    			'phno' => 'nullable|string',
    			'hadd' => 'nullable|max:400',
    			'slackchannel'=> 'nullable|string|max:400',
    			'image' => 'nullable|image|mimes:jpeg,jpg,png|max:3000',
    		]);
    		if ($file = request()->file('image'))
    		{
    			$ext = $file->guessClientExtension();
    			$unique_name = md5($file);

    			$relativeUrl = $file->storeAs('thankingli-images/' . \Auth::id(),"$unique_name.png");
    			$imageFullLoc="$imageLoc"."$user_id/"."$unique_name.png";

    			$image=Image::make($imageFullLoc)->orientate();

    			$image->save($imageFullLoc);


    			$profileObj->image=$relativeUrl;
    		}
    		
    		$profileObj=profiles::where('id',$user_id)->exists();

    		if ($profileObj)
    			{
    				$profileObj=profiles::where('id',$user_id)->get()->first();
    				//return $profileObj;
    				if ($request['company'])
    				{
    					$profileObj->company=$request['company'];
    				}
    				if (isset($request['phno']))
    				{
    					$profileObj->phone_no=$request['phno'];
    				}
    				if (isset($request['slackchannel']))
    				{
    					$profileObj->slack_channel=$request['slackchannel'];
    				}
    				if (isset($request['position']))
    				{
    					$profileObj->position=$request['position'];
    				}
    			}
    			else
    			{
    				$profileObj=new profiles;
    				$profileObj->id=$user_id;
    				if ($request['company'])
    				{
    					$profileObj->company=$request['company'];
    				}
    				if (isset($request['phno']))
    				{
    					$profileObj->phone_no=$request['phno'];
    				}
    				if (isset($request['slackchannel']))
    				{
    					$profileObj->slack_channel=$request['slackchannel'];
    				}
    				if (isset($request['position']))
    				{
    					$profileObj->position=$request['position'];
    				}
    			}
    			

    			if ($profileObj->save())
    			{
    				$logObject = new LogsController("","200","Profile data updated");
    				$data=$logObject->dataFormattediwthStatus();
    				return $data;
    			}
    		}
    		catch(\Exception $e)
    		{
    			$logObject = new LogsController("","400",$e->getMessage());
    			$data=$logObject->dataFormattediwthStatus();
    			return $data;
    		}
    }
    protected function storeProfileSkills(Request $request)
    {
    	try {
    		$user_id = \Auth::id();
    		$this->validate(request(), [
    			'cat_selection' => 'required|array',
    			'subcat_selection' => 'required|array',
    			'experience' => 'nullable|string|max:5000'
    			
    		]);
    		$data=$request->all();
    		\DB::table('profile_skills')->where('id',$user_id )->delete();
    		foreach ($data['subcat_selection'] as $sub_cat)
    		{
    			$skill_exist=profile_skills::where('sub_cat_id',$sub_cat)->exists();
    			$cat_id=sub_categories::where('sub_cat_id',$sub_cat)->get(['cat_id']);
    			//return $cat_id[0]->cat_id;
    			if(!$skill_exist)
    			{
    				$skill_entry = new profile_skills();
    				$skill_entry->id=$user_id;
    				$skill_entry->cat_id=$cat_id[0]->cat_id;
    				$skill_entry->sub_cat_id=$sub_cat;
    				$skill_entry->experience=$data['experience'];
    				$skill_entry->save();
    				
    			}
    			

    		}
    		$logObject = new LogsController("","200","Profile Skills updated");
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    	catch (\Exception $e) 
    	{
    			$logObject = new LogsController("","400",$e->getMessage());
    			$data=$logObject->dataFormattediwthStatus();
    			return $data;
    	}
    }
    protected function storeImageData(Request $request)
    {
    	try {
            $user_id=\Auth::id();
            $imageLoc = '/Applications/XAMPP/xamppfiles/thankingli/storage/app/thankingli-images/';
    		$this->validate(request(), [
    			'image'=> 'nullable|image|mimes:jpeg,jpg,png,JPG,PNG|max:8000'
    			
    			
    		]);
    		if ($file = request()->file('image'))
    		{
    				
    			$ext = $file->guessClientExtension();
    			$unique_name = md5($file);
				$relativeUrl = $file->storeAs('thankingli-images/' . \Auth::id(),"$unique_name.png");
    			$imageFullLoc="$imageLoc"."$user_id/"."$unique_name.png";
				$image=Image::make($imageFullLoc)->orientate();
				$image->save($imageFullLoc);
				$profileObj=profiles::where('id',$user_id)->exists();

    		if ($profileObj)
    			{
    				$profileObj=profiles::where('id',$user_id)->get()->first();
    				$profileObj->image=$relativeUrl;
    				if ($profileObj->save())
    				{
    					$logObject = new LogsController("","200","Image data uploaded");
    					$data=$logObject->dataFormattediwthStatus();
    					return $data;
    				}
    				
    				
    			}
    			else
    			{
    				$profileObj=new profiles;
    				$profileObj->id=$user_id;
    				$profileObj->image=$relativeUrl;
    				if ($profileObj->save())
    				{
    					$logObject = new LogsController("","200","Image data uploaded");
    					$data=$logObject->dataFormattediwthStatus();
    					return $data;
    				}
    				
    			}
    			

    			
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
