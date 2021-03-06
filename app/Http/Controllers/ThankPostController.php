<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_thanks;
use App\user_thanks_comments;
use App\Jobs\SendNotificationEmails;
use App\Jobs\SendLikeEmail;
use App\User;
use App\UserProfiles;
use App\create_addnl_posts_infos;
use Closure;
use Image;
class ThankPostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['emailLink','registeredLink','showTopFivePosts','ShowPostId']);
        //$this->middleware('auth');
    }
    
    public function ThankPost(Request $request)
    {
    		$imageLoc = '/Applications/XAMPP/xamppfiles/thankingli/storage/app/thankingli-images/';
    		$newPost = new user_thanks;
    		$user = \Auth::user();
    		$user_id=$user->id;
    		$this->validate(request(), [
    			'name'=> 'required|max:40',
    			'email' => 'nullable|email',
    			'thank-title'=> 'required|max:100',
    			'thank-descr'=>'required|max:5000',
    			'image'=> 'nullable|image|mimes:jpeg,jpg,png|max:3000',
    			'emailpresent'=>'nullable',
    			'surprise' => 'nullable'
    			
    			
    			
    		]);
    		
    		//dd($request->all());
    		$data = $request->all();
    		$data['surprise']=1;
    		
    		
    		$exists=User::where('email', $data['email'])->exists();
    		
    		
    			
    		
    			//processin and saving the image
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
 					$image->fit(400, 400)->save($imageFullLoc);

 			//$image->save($imageFullLoc);
    		//$image->resize(600, 300);
    				// $newProfilePic = new UserProfiles;
//     			
//     				$newProfilePic->id = $user_id;
//     				$newProfilePic->image = $relativeUrl;
//     				$newProfilePic->save();
    			}
    			
    		
    			
    			//$exists=User::where('email', $data['email'])->exists();
    			if ($data['emailpresent']==0)
    			{
    				
    					$newPost->from_id = \Auth::id();
    					$newPost->from_name = $user->name;
    					$newPost->to_name = $data['name'];
    					$newPost->to_email = $data['email'];
    			//$newPost->to_id = ;
    			//auth()->logout();
    					if ($file = request()->file('image'))
    					{
    						$newPost->image = $relativeUrl;
    					}
    				// else
//     				{	
//     					$relativeUrl = "thankingli-images/thankingli.png";
//     					$newPost->image = '';	
//     				}
    					$newPost->thank_title = $data['thank-title'];
    					$newPost->thank_description = $data['thank-descr'];
    		
    					if($newPost->save())
    					{
    						$url="http://ec2-54-204-208-43.compute-1.amazonaws.com/emaillink/uid/".$newPost->from_id."/postid/".$newPost->post_thank_id."?redirect-url=/registered/uid/".$newPost->from_id."/postid/".$newPost->post_thank_id;
    				//dd($newPost->id);
//     					dispatch(new SendNotificationEmails($user,$url,$data['name'],$data['email']));
    						if ($data['surprise']==0)
							{
								return view('buy-something')
										->with('to_email',$newPost->to_email)
										->with('to_name',$newPost->to_name);
							}
							else
							{
    							return redirect('/thankwall');
    						}
    				
    					}
    			
    				
    			}
    			else
    			{
    		
    				if ($exists)
    				{
    					$toUser= User::where('email', $data['email'])->first();
    					$newPost->from_id = \Auth::id();
    					$newPost->from_name = $user->name;
    					$newPost->to_name = $toUser->name;
    					$newPost->to_email = $toUser->email;
    					$newPost->to_id = $toUser->id;
    			//return 'great';
    					if ($file = request()->file('image'))
    					{
    						$newPost->image = $relativeUrl;
    					}
    				// else
//     					{	
//     					$relativeUrl = "thankingli-images/thankingli.png";
//     					$newPost->image = $relativeUrl;	
//     				}
    					$newPost->thank_title = $data['thank-title'];
    					$newPost->thank_description = $data['thank-descr'];
    		
    					if($newPost->save())
    					{
    						$url="http://localhost/showposts/postid/".$newPost->post_thank_id;
    					//dd($newPost->id);
//     					dispatch(new SendNotificationEmails($user,$url,$toUser->name,$newPost->to_email));
							if ($data['surprise']==0)
							{
								return view('buy-something')
										->with('to_email',$newPost->to_email)
										->with('to_name',$newPost->to_name);
							}
							else
							{
    							return redirect('/thankwall');
    						}
    					}
    				}
    				else
    				{
    					$newPost->from_id = \Auth::id();
    					$newPost->from_name = $user->name;
    					$newPost->to_name = $data['name'];
    					$newPost->to_email = $data['email'];
    			//$newPost->to_id = ;
    			//auth()->logout();
    					if ($file = request()->file('image'))
    					{
    						$newPost->image = $relativeUrl;
    					}
    				// else
//     				{	
//     					$relativeUrl = "thankingli-images/thankingli.png";
//     					$newPost->image = '';	
//     				}
    					$newPost->thank_title = $data['thank-title'];
    					$newPost->thank_description = $data['thank-descr'];
    		
    					if($newPost->save())
    					{
    						$url="http://ec2-54-204-208-43.compute-1.amazonaws.com/emaillink/uid/".$newPost->from_id."/postid/".$newPost->post_thank_id."?redirect-url=/registered/uid/".$newPost->from_id."/postid/".$newPost->post_thank_id;
    				//dd($newPost->id);
//     					dispatch(new SendNotificationEmails($user,$url,$data['name'],$data['email']));
    						if ($data['surprise']==0)
							{
								return view('buy-something')
										->with('to_email',$newPost->to_email)
										->with('to_name',$newPost->to_name);
							}
							else
							{
    							return redirect('/thankwall');
    						}
    				
    					}
    			
    				}
    			
    			}	
    				
    				
    		
    		
    		
    		
    		

    }
    public function emailLink(Request $request,$id,$postid)
    {
    	
    	$redirectUrl=$request['redirect-url'];
    	//dd($refererUrl);
    		//dd($request['redirect-url']);
    		return view('create-user')
    				->with('redirectUrl',$redirectUrl);
    	
    
    
    }
    public function registeredLink($id,$postid)
    {
    
    	if ($user=\Auth::user())
    	{
    		$status=user_thanks::where('from_id', $id)
          	->where('post_thank_id',$postid )
          	->update(['to_id' => $user->id]);
    	
    	
    	
    			if($status)
    			{
    		
    					return redirect('/home');
    			
    		
    			}
    			else
    			{
    				echo "Isn't great";
    			}
    	}
    	else
    	{
    		echo "Method not allowed";
    	}
    }
    
    public function index()
    {
        //
        $ThankedBy = user_thanks::where('to_id',\Auth::id())->simplePaginate(2);
        //$ThankComments = user_thanks_comments::
        $CommentsOnPosts= user_thanks_comments::all();
        
        return view('home',compact('ThankedBy','CommentsOnPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function showYouThanked(Request $request)
    {
        //
        $profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        $ThankedBy = user_thanks::where('from_id',\Auth::id())->orderBy('created_at','desc')->simplePaginate(5);
        $CommentsOnPosts= user_thanks_comments::all();
        
        if ($profileImageCheck)
        {
        	return view('your-thank-wall',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	return view('your-thank-wall',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageEmpty->image);
        }
        //return view('/home',compact('ThankedBy'));
        //dd($request->server('HTTP_REFERER'));
        
        //return view('your-thank-wall',compact('ThankedBy','CommentsOnPosts'));
    }
    
	public function showThankedYou($id)
    {
    	$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
    	$ThankedBy = user_thanks::where('to_id',\Auth::id())->orderBy('created_at','desc')->simplePaginate(5);
        $CommentsOnPosts= user_thanks_comments::all();
        
        if ($profileImageCheck)
        {
        	return view('/home',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	return view('/home',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageEmpty->image);
        }
        
        //return view('/home',compact('ThankedBy','CommentsOnPosts'));
        //
    }
    public function ShowPostId($postid)
    {
    	$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
    	$ThankedBy = user_thanks::where('post_thank_id',$postid)->simplePaginate(1);
    	$CommentsOnPosts= user_thanks_comments::all();
    	
    	if ($profileImageCheck)
        {
        	return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageEmpty->image);
        }
    	
//     	return view('/home',compact('ThankedBy','CommentsOnPosts'));
    
    }
    
    public function showTopFivePosts()
    {
    	$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();	
    	$ThankedBy = user_thanks::orderBy('created_at','desc')->simplePaginate(5);
        $CommentsOnPosts= user_thanks_comments::all();
        
        if ($profileImageCheck)
        {
        	return view('latest-ten-posts',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	return view('latest-ten-posts',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageEmpty->image);
        }
        
//         return view('latest-ten-posts',compact('ThankedBy','CommentsOnPosts'));
    
    }
    
    public function showProfileThankWall($id)
    {
    	$userOnId = User::where('id',$id)->get()->first();
    	$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        $ThankedBy = user_thanks::where('from_id',$id)->orderBy('created_at','desc')->simplePaginate(5);
        $CommentsOnPosts= user_thanks_comments::all();
        
        if ($profileImageCheck)
        {
        	return view('your-thank-profilewall',compact('ThankedBy','CommentsOnPosts','userOnId'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	return view('your-thank-profilewall',compact('ThankedBy','CommentsOnPosts','userOnId'))
        				->with('image',$profileImageEmpty->image);
        }
    
    }
    
    public function showProfileTopFivePosts()
    {
    
    	
    
    }
    
    public function likedPost($postid)
    {
    	$user = \Auth::user();
    	//Already liked check
    	$likedOrNot = create_addnl_posts_infos::where('post_thank_id',$postid)->where('id',$user->id)->get();
    	
    	if (count($likedOrNot)>0)
    	{
    		//return ->withErrors(['msg', 'You have liked this story already']);;
    		return back();
    	}
    	else
    	{
    		if ($id=$user->id)
    		{
    			$likedPostObject = new create_addnl_posts_infos;
    			$likedPostObject->id = $id;
    			$likedPostObject->post_thank_id = $postid;
    			$likedPostObject->heart = 1;
    			$posturl = 'http://www.thankingli.com/showposts/postid/'.$postid;
    			$ownerPost = user_thanks::where('post_thank_id',$postid)->get(['from_id'])->first();
    			$ownerPostUser = user::where('id',$ownerPost->from_id)->get(['name','email'])->first();
    			if ($likedPostObject->save())
    			{
    			//name of person who liked - post url - name of the person owning the post - email of person owning the post
    			//dispatch(new SendLikeEmail($user->name,$posturl,$ownerPostUser->name,$ownerPostUser->email));
    				return back();
    			}
    		
    		}
    		else
    		{
    			return back();
    		}
    	}
    	
    	
    	
    
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
