<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\user_thanks;
use App\user_thanks_comments;
use App\UserProfiles;
use App\profiles;
use App\Http\Controllers\ThankPostController;
use App\create_addnl_posts_infos;
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
        $this->middleware('auth')->except(['posts','homeDesign','startIndex']);
    } 
     
    public function startIndex()
    {
        if(\Auth::check()){
            // $newTpObject=new ThankPostController();
            // $result=$newTpObject->showTopFivePosts();
            // return $result;
            return redirect('/feed');
        }
        else
        {
            return view('indexv3');
        }
    } 
    public function index()
    {
        //
        $CommentsOnPosts1=[];
        $CommentsOnPosts2=[];
        $profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        
        $ThankedBy = user_thanks::where('to_id',\Auth::id())->where('private',0)->orderBy('created_at','desc')->simplePaginate(5);

        foreach ($ThankedBy as $thankPost) {
            $CommentsOnPosts[$thankPost->post_thank_id]= user_thanks_comments::where('post_id',$thankPost->post_thank_id)->orderBy('created_at','desc')->get();
            $likes=create_addnl_posts_infos::where('post_thank_id',$thankPost->post_thank_id)->get();
            $likedOrNot=create_addnl_posts_infos::where('post_thank_id',$thankPost->post_thank_id)->where('id',\Auth::id())->get();
            if (count($likedOrNot)>0)
            {
                $likedOrNot=1;
            }
            else
            {
                $likedOrNot=0;
            }
            $likeCount=count($likes);
            if (is_null($likeCount)) {
                $likeCount=0;
            }
            // if (count($CommentsOnPosts[$thankPost->post_thank_id])>0) {
                for ($i=0;$i<count($CommentsOnPosts[$thankPost->post_thank_id]);$i++) {
                    $CommentsOnPosts1[]=$CommentsOnPosts[$thankPost->post_thank_id][$i];
                    $CommentsOnPosts2[]=$CommentsOnPosts[$thankPost->post_thank_id][$i];
                }
            // }
            $commentCount=count($CommentsOnPosts1);
            $thankPost['likedOrNot']=$likedOrNot;
            $thankPost['likeCount']=$likeCount;
            $thankPost['commentCount']=$commentCount;
            $CommentsOnPosts1=[];
            
        }
        if ($profileImageCheck)
        {
            // return view('latest-ten-posts',compact('ThankedBy','CommentsOnPosts'))
//                      ->with('image',$profileImageCheck->image);
            //if ()
            $result=compact('ThankedBy','CommentsOnPosts2','profileImageCheck');
            return $result;
            // return view('blog-default-aside-both-1-0',compact('ThankedBy','CommentsOnPosts'))
            //          ->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	// return view('home',compact('ThankedBy','CommentsOnPosts'))
//         				->with('image',$profileImageEmpty->image);

			$result=compact('ThankedBy','CommentsOnPosts2');
            return $result;
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
    public function viewPt($id)
    {
    		$userOnId = User::where('id',$id)->get()->first();
    		
    		//logic here
    		$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        	$Thanked = user_thanks::where('from_id',$id)->where('private',0)->orderBy('created_at','desc')->simplePaginate(20); 
        	$ThankedBy = user_thanks::where('to_id',$id)->where('private',0)->orderBy('created_at','desc')->simplePaginate(20);
        	$CommentsOnPosts= user_thanks_comments::all();
        	if ($profileImageCheck)
        	{
        		// return view('profile',compact('ThankedBy','CommentsOnPosts','userOnId'))
//         					->with('image',$profileImageCheck->image);
        		return view('profile-1-0-pt',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
        					->with('image',$profileImageCheck->image);			
        	}
       	 	else 
        	{
        		$profileImageEmpty = new UserProfiles;
        		// return view('profile',compact('ThankedBy','CommentsOnPosts','userOnId'))
//         					->with('image',$profileImageEmpty->image);
        		return view('profile-1-0-pt',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
        					->with('image',$profileImageEmpty->image);			
        	}
    
    		
    		//ends here
    		
    		//return view('profile',compact('userOnId')); 
    }
    
    public function viewProfileNew($id)
    {
    		$userOnId = User::where('id',$id)->get()->first();
    		
    		//logic here
    		$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
			$Thanked = user_thanks::where('from_id',$id)->where('private',0)->orderBy('created_at','desc')->simplePaginate(20);        
        	$ThankedBy = user_thanks::where('to_id',$id)->where('private',0)->orderBy('created_at','desc')->simplePaginate(20);
        	$CommentsOnPosts= user_thanks_comments::all();
        	if ($profileImageCheck)
        	{
        		return view('profile-1-0',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
        					->with('image',$profileImageCheck->image);
        	}
       	 	else 
        	{
        		$profileImageEmpty = new UserProfiles;
        		return view('profile-1-0',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
        					->with('image',$profileImageEmpty->image);
        	}
    
    		
    		//ends here
    		
    		//return view('profile',compact('userOnId')); 
    }
    public function viewProfilev3($id)
    {
            $userOnId = User::where('id',$id)->get()->first();
            $CommentsOnPosts1=[];
            //logic here
            $profileImageCheck = profiles::where('id',$id)->get(['image'])->first();
            $profileWorksAt=profiles::where('id',$id)->get(['company'])->first();

            $Thanked = user_thanks::where('from_id',$id)->where('private',0)->orderBy('created_at','desc')->simplePaginate(200);       
            $ThankedBy = user_thanks::where('to_id',$id)->where('private',0)->orderBy('created_at','desc')->simplePaginate(200);


            foreach ($ThankedBy as $thankPost) 
            {
                $CommentsOnPosts[$thankPost->post_thank_id]= user_thanks_comments::where('post_id',$thankPost->post_thank_id)->orderBy('created_at','desc')->get();
                $likes=create_addnl_posts_infos::where('post_thank_id',$thankPost->post_thank_id)->get();
                $likedOrNot=create_addnl_posts_infos::where('post_thank_id',$thankPost->post_thank_id)->where('id',\Auth::id())->get();
                if (count($likedOrNot)>0)
                {
                    $likedOrNot=1;
                }
                else
                {
                    $likedOrNot=0;
                }
                $likeCount=count($likes);
                if (is_null($likeCount)) {
                    $likeCount=0;
                }
            // if (count($CommentsOnPosts[$thankPost->post_thank_id])>0) {
                for ($i=0;$i<count($CommentsOnPosts[$thankPost->post_thank_id]);$i++) {
                    $CommentsOnPosts1[]=$CommentsOnPosts[$thankPost->post_thank_id][$i];
                    //$CommentsOnPosts2[]=$CommentsOnPosts[$thankPost->post_thank_id][$i];
                }
            // }
                $commentCount=count($CommentsOnPosts1);
                $thankPost['likedOrNot']=$likedOrNot;
                $thankPost['likeCount']=$likeCount;
                $thankPost['commentCount']=$commentCount;
                $CommentsOnPosts1=[];

            }

            foreach ($Thanked as $thankPost) 
            {
                $CommentsOnPosts[$thankPost->post_thank_id]= user_thanks_comments::where('post_id',$thankPost->post_thank_id)->orderBy('created_at','desc')->get();
                $likes=create_addnl_posts_infos::where('post_thank_id',$thankPost->post_thank_id)->get();
                $likedOrNot=create_addnl_posts_infos::where('post_thank_id',$thankPost->post_thank_id)->where('id',\Auth::id())->get();
                if (count($likedOrNot)>0)
                {
                    $likedOrNot=1;
                }
                else
                {
                    $likedOrNot=0;
                }
                $likeCount=count($likes);
                if (is_null($likeCount)) {
                    $likeCount=0;
                }
            // if (count($CommentsOnPosts[$thankPost->post_thank_id])>0) {
                for ($i=0;$i<count($CommentsOnPosts[$thankPost->post_thank_id]);$i++) {
                    $CommentsOnPosts1[]=$CommentsOnPosts[$thankPost->post_thank_id][$i];
                    //$CommentsOnPosts2[]=$CommentsOnPosts[$thankPost->post_thank_id][$i];
                }
            // }
                $commentCount=count($CommentsOnPosts1);
                $thankPost['likedOrNot']=$likedOrNot;
                $thankPost['likeCount']=$likeCount;
                $thankPost['commentCount']=$commentCount;
                $CommentsOnPosts1=[];
                
            }




            //$CommentsOnPosts= user_thanks_comments::all();
            //$result=compact('ThankedBy','CommentsOnPosts','userOnId','Thanked');
            //dd($result);
            //return compact('ThankedBy','userOnId','Thanked');
            if ($profileImageCheck)
            {
                return view('profilev3',compact('ThankedBy','userOnId','Thanked'))
                            ->with('image',$profileImageCheck->image)
                            ->with('company',$profileWorksAt->company);
                //return $result;
            }
            else 
            {
                
                $profileImageEmpty = new UserProfiles;
                $profileWorksAt = new UserProfiles;
                return view('profilev3',compact('ThankedBy','userOnId','Thanked'))
                            ->with('image',$profileImageEmpty->image)
                            ->with('company',$profileWorksAt->company);
                //return $result;
            }
    
            
            
            
            //return view('profile',compact('userOnId')); 
    }
    public function viewProfilev3Page()
    {
        return view('profilev3');

    }
    public function showPrivate()
    {
    		$id=\Auth::id();
    		$userOnId = User::where('id',\Auth::id())->get()->first();
    		
    		//logic here
    		$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
			$Thanked = user_thanks::where('from_id',$id)->where('private',1)->orderBy('created_at','desc')->simplePaginate(20);        
        	$ThankedBy = user_thanks::where('to_id',$id)->where('private',1)->orderBy('created_at','desc')->simplePaginate(20);
        	$CommentsOnPosts= user_thanks_comments::all();
        	if ($profileImageCheck)
        	{
        		return view('private-messages',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
        					->with('image',$profileImageCheck->image);
        	}
       	 	else 
        	{
        		$profileImageEmpty = new UserProfiles;
        		return view('private-messages',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
        					->with('image',$profileImageEmpty->image);
        	}
    
    }
    public function thankId($id)
    {
    	
    		$userOnId = User::where('id',$id)->get()->first();
    		
    		//logic here
    		$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        
        	$ThankedBy = user_thanks::where('to_id',$id)->orderBy('created_at','desc')->simplePaginate(5);
        	$CommentsOnPosts= user_thanks_comments::all();
        	if ($profileImageCheck)
        	{
        		// return view('thank-profile',compact('ThankedBy','CommentsOnPosts','userOnId'))
//         					->with('image',$profileImageCheck->image);
				return view('thank-profile-1-0',compact('ThankedBy','CommentsOnPosts','userOnId'))
         					->with('image',$profileImageCheck->image);
        	}
       	 	else 
        	{
        		$profileImageEmpty = new UserProfiles;
        		// return view('thank-profile',compact('ThankedBy','CommentsOnPosts','userOnId'))
//         					->with('image',$profileImageEmpty->image);
        		return view('thank-profile-1-0',compact('ThankedBy','CommentsOnPosts','userOnId'))
        					->with('image',$profileImageEmpty->image);			
        	}
    
    }
    public function thankIdv3($id)
    {
        
            $userOnId = User::where('id',$id)->get()->first();
            
            //logic here
            $profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        
            $ThankedBy = user_thanks::where('to_id',$id)->orderBy('created_at','desc')->simplePaginate(5);
            $CommentsOnPosts= user_thanks_comments::all();
            if ($profileImageCheck)
            {
                // return view('thank-profile',compact('ThankedBy','CommentsOnPosts','userOnId'))
//                          ->with('image',$profileImageCheck->image);
                return view('thank_profilev3',compact('ThankedBy','CommentsOnPosts','userOnId'))
                            ->with('image',$profileImageCheck->image);
            }
            else 
            {
                $profileImageEmpty = new UserProfiles;
                // return view('thank-profile',compact('ThankedBy','CommentsOnPosts','userOnId'))
//                          ->with('image',$profileImageEmpty->image);
                return view('thank_profilev3',compact('ThankedBy','CommentsOnPosts','userOnId'))
                            ->with('image',$profileImageEmpty->image);          
            }
    
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
    		
    				$relativeUrl = $file->storeAs('thankingli-images/' . \Auth::id(),"$unique_name.png");
    				$imageFullLoc="$imageLoc"."$user_id/"."$unique_name.png";
    		//dd($imageFullLoc);
    				$image=Image::make($imageFullLoc)->orientate();
    		// resize the image to a width of 300 and constrain aspect ratio (auto height)
			 // $image->resize(600, null, function ($constraint) {
//    				  $constraint->aspectRatio();
//  			})->save($imageFullLoc);
 			//$image->resize(600, 300)->save($imageFullLoc);
 					$image->save($imageFullLoc);

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
    public function editProfilev3()
    {
        //
            
            $profileData = UserProfiles::where('id',\Auth::id())->get();
            $userName=user::where('id',\Auth::id())->get(['name'])->first();
            //dd($profileData);
            return view('profile-editv3');
        
        
        
        
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
            'slackchannel'=> 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:3000',
        ]);
        $data = $request->all();
        $newPost =  UserProfiles::where('id',\Auth::id())->get()->first();
        $newPost->homeaddress = $data['hadd'];
        $newPost->phno = $data['phno'];
        $newPost->company=$data['company'];
        $newPost->slack_channel=$data['slackchannel'];
        if ($file = request()->file('image'))
    			{
    				$ext = $file->guessClientExtension();
    				$unique_name = md5($file);
    		
    				$relativeUrl = $file->storeAs('thankingli-images/' . \Auth::id(),"$unique_name.png");
    				$imageFullLoc="$imageLoc"."$user_id/"."$unique_name.png";
    		//dd($imageFullLoc);
    				$image=Image::make($imageFullLoc)->orientate();
    		// resize the image to a width of 300 and constrain aspect ratio (auto height)
			 // $image->resize(600, null, function ($constraint) {
//    				  $constraint->aspectRatio();
//  			})->save($imageFullLoc);
 			//$image->resize(600, 300)->save($imageFullLoc);
 					$image->save($imageFullLoc);

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
	public function thankSomeoneNew()
	{
		
		return view('thank-someone-1-0');
		
	}
	public function returnStripe()
	{
		return view('buy-something');
	}
	public function posts()
	{
		
		return view('show-post-id');
	
	}
	public function homeDesign()
	{
		$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();	
    	$ThankedBy = user_thanks::orderBy('created_at','desc')->whereNotNull('image')->where('private',0)->simplePaginate(3);
        $CommentsOnPosts= user_thanks_comments::all();
        
        if ($profileImageCheck)
        {
        	return view('index-fullscreen-youtube',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	return view('index-fullscreen-youtube',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageEmpty->image);
        }
		//return view('index-fullscreen-youtube');
	}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function firstHund()
    {
    	
    	return view('firsthund');	
    	
    } 
    public function destroy($id)
    {
        //
    }
    public function showPrivateFromPost($postid)
    {
    	$loggedInId=\Auth::id();
    	$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
    	$ThankedBy = user_thanks::where('post_thank_id',$postid)->where('private',1)->where('from_id',$loggedInId)->simplePaginate(1);
    	//$CommentsOnPosts= user_thanks_comments::all();
    	$CommentsOnPosts= user_thanks_comments::where('post_id',$postid)->orderBy('created_at','desc')->get();
    	
    	if ($profileImageCheck)
        {
        	// return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
//         				->with('image',$profileImageCheck->image);
        	return view('privatesingle',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	// return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
//         				->with('image',$profileImageEmpty->image);
        	return view('privatesingle',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageEmpty->image);			
        }
    	
//     	return view('/home',compact('ThankedBy','CommentsOnPosts'));
    
    }
    public function showPrivateToPost($postid)
    {
    	$loggedInId=\Auth::id();
    	$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
    	$ThankedBy = user_thanks::where('post_thank_id',$postid)->where('private',1)->where('to_id',$loggedInId)->simplePaginate(1);
    	//$CommentsOnPosts= user_thanks_comments::all();
    	$CommentsOnPosts= user_thanks_comments::where('post_id',$postid)->orderBy('created_at','desc')->get();
    	
    	if ($profileImageCheck)
        {
        	// return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
//         				->with('image',$profileImageCheck->image);
        	return view('privatesingle',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	// return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
//         				->with('image',$profileImageEmpty->image);
        	return view('privatesingle',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageEmpty->image);			
        }
    	
//     	return view('/home',compact('ThankedBy','CommentsOnPosts'));
    
    }
}
