<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\user_thanks;
use App\user_thanks_comments;
use App\UserProfiles;
use Image;
class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['posts']);
    } 
     
    public function index()
    {
        //
        $profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        
        $ThankedBy = user_thanks::where('to_id',\Auth::id())->orderBy('created_at','desc')->simplePaginate(2);
        $CommentsOnPosts= user_thanks_comments::all();
        if ($profileImageCheck)
        {
        	return view('home',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	return view('home',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageEmpty->image);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewProfile($id)
    {
    		$userOnId = User::where('id',$id)->get()->first();
    		
    		//logic here
    		$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        
        	$ThankedBy = user_thanks::where('to_id',$id)->orderBy('created_at','desc')->simplePaginate(5);
        	$CommentsOnPosts= user_thanks_comments::all();
        	if ($profileImageCheck)
        	{
        		return view('profile',compact('ThankedBy','CommentsOnPosts','userOnId'))
        					->with('image',$profileImageCheck->image);
        	}
       	 	else 
        	{
        		$profileImageEmpty = new UserProfiles;
        		return view('profile',compact('ThankedBy','CommentsOnPosts','userOnId'))
        					->with('image',$profileImageEmpty->image);
        	}
    
    		
    		//ends here
    		
    		//return view('profile',compact('userOnId')); 
    }
    public function create(Request $request)
    {
        //
        $imageLoc = '/Applications/XAMPP/xamppfiles/thankingli/storage/app/thankingli-images/';
        $user_id = \Auth::id();
        $this->validate(request(), [
            'name' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'phno' => 'nullable|string',
            'hadd' => 'nullable|max:400',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:3000',
        ]);
        $data = $request->all();
        //$newPost =  UserProfiles::where('id',\Auth::id())->get()->first();
        $newPost = new UserProfiles;
        $newPost->id = $user_id;
        $newPost->homeaddress = $data['hadd'];
        $newPost->phno = $data['phno'];
        $newPost->company=$data['company'];
        
        if ($file = request()->file('image'))
    			{
    				$ext = $file->guessClientExtension();
    				$unique_name = md5($file);
    		
    				$relativeUrl = $file->storeAs('thankingli-images/' . \Auth::id(),"$unique_name.{$ext}");
    				$imageFullLoc="$imageLoc"."$user_id/"."$unique_name.{$ext}";
    		//dd($imageFullLoc);
    				$image=Image::make($imageFullLoc);
    		// resize the image to a width of 300 and constrain aspect ratio (auto height)
			 // $image->resize(600, null, function ($constraint) {
//    				  $constraint->aspectRatio();
//  			})->save($imageFullLoc);
 			//$image->resize(600, 300)->save($imageFullLoc);
 					$image->fit(300, 300)->save($imageFullLoc);

 			//$image->save($imageFullLoc);
    		//$image->resize(600, 300);
    				// $newProfilePic = new UserProfiles;
//     			
//     				$newProfilePic->id = $user_id;
//     				$newProfilePic->image = $relativeUrl;
//     				$newProfilePic->save();
					$newPost->image=$relativeUrl;
    			}
    	$userName=user::where('id',\Auth::id())->get(['name'])->first();		
        if($newPost->save())
        {
        	$profileData = UserProfiles::where('id',\Auth::id())->get();
        	return view('/profile-edit',compact('profileData'))->with('name',$userName);
        }
        else
        {
        	return back();
        }
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editProfile()
    {
        //
        	
        	$profileData = UserProfiles::where('id',\Auth::id())->get();
        	$userName=user::where('id',\Auth::id())->get(['name'])->first();
        	//dd($profileData);
        	return view('/profile-edit',compact('profileData'))->with('name',$userName);
        
        
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $imageLoc = '/Applications/XAMPP/xamppfiles/thankingli/storage/app/thankingli-images/';
        $user_id = \Auth::id();
        $this->validate(request(), [
            'name' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'phno' => 'nullable|string',
            'hadd' => 'nullable|max:400',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:3000',
        ]);
        $data = $request->all();
        $newPost =  UserProfiles::where('id',\Auth::id())->get()->first();
        $newPost->homeaddress = $data['hadd'];
        $newPost->phno = $data['phno'];
        $newPost->company=$data['company'];
        
        if ($file = request()->file('image'))
    			{
    				$ext = $file->guessClientExtension();
    				$unique_name = md5($file);
    		
    				$relativeUrl = $file->storeAs('thankingli-images/' . \Auth::id(),"$unique_name.{$ext}");
    				$imageFullLoc="$imageLoc"."$user_id/"."$unique_name.{$ext}";
    		//dd($imageFullLoc);
    				$image=Image::make($imageFullLoc);
    		// resize the image to a width of 300 and constrain aspect ratio (auto height)
			 // $image->resize(600, null, function ($constraint) {
//    				  $constraint->aspectRatio();
//  			})->save($imageFullLoc);
 			//$image->resize(600, 300)->save($imageFullLoc);
 					$image->fit(75, 75)->save($imageFullLoc);

 			//$image->save($imageFullLoc);
    		//$image->resize(600, 300);
    				// $newProfilePic = new UserProfiles;
//     			
//     				$newProfilePic->id = $user_id;
//     				$newProfilePic->image = $relativeUrl;
//     				$newProfilePic->save();
					$newPost->image=$relativeUrl;
    			}
        if($newPost->save())
        {
        	return back();
        }
        else
        {
        	$profileData = UserProfiles::where('id',\Auth::id())->get();
        	return view('/profile-edit',compact('profileData'));
        }
        //dd($newPost);
    }
	public function thankSomeone()
	{
		
		return view('thank-someone');
		
	}
	public function returnStripe()
	{
		return view('buy-something');
	}
	public function posts()
	{
		
		return view('show-post-id');
	
	}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
