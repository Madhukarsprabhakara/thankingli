<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_thanks;
use App\user_thanks_comments;
use App\Jobs\SendNotificationEmails;
use App\Jobs\SendLikeEmail;
use App\User;
use App\UserProfiles;
use App\purchase_temps;
use App\create_addnl_posts_infos;
use App\products;
use App\reg_url_links;
use App\Notifications\ThankYouMessageSent;
use Closure;
use Image;
//use Exception;
class ThankPostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['emailLink','registeredLink','ShowPostId','ShowPostIdv3']);
        //$this->middleware('auth');
    }
    
    public function ThankPost(Request $request)
    {
    		
            //dd($request->all());
    		$request->session()->regenerate();
    		$sessionData = $request->session()->getId();

    		//\Session::put('payload',$sessionData);
    		$imageLoc = '/Applications/XAMPP/xamppfiles/thankingli/storage/app/thankingli-images/';
    		$serverUrl='http://localhost/';
    		$newPost = new user_thanks;
    		$user = \Auth::user();
    		$user_id=$user->id;
    		$this->validate(request(), [
    			'name'=> 'required|max:40',
    			'email' => 'nullable|email',
    			'thank-title'=> 'required|max:100',
    			'thank-descr'=>'required|max:5000',
    			'image'=> 'nullable|image|mimes:jpeg,jpg,png|max:8000',
    			'emailpresent'=>'nullable',
    			'surprise' => 'nullable', //Coffee purchase flag
    			'privacy' => 'required|boolean',
                'id' => 'nullable|integer'
    			
    			
    		]);
    		
    		//dd($request->all());
    		$data = $request->all();
        //dd($data);
    		//comment/uncomment the below to either enable/disable e-commerce
//     		$data['surprise']=1;
    		$data['thank-descr']=nl2br($data['thank-descr']);
    		if (isset($data['email'])) {
                $exists=User::where('email', $data['email'])->exists();
            }
            else
            {
                $email=User::where('id',$data['id'])->get(['email'])->first();

                $data['email'] = $email['email'];
                $exists=User::where('email', $data['email'])->exists();
            }
    		//dd($data);
    		
    		
            

    			//processin and saving the image
                if ($file = request()->file('image'))
                {
                   $ext = $file->guessClientExtension();
                   $unique_name = md5($file);

                   $relativeUrl = $file->storeAs('thankingli-images/' . \Auth::id(),"$unique_name.png");
                   $imageFullLoc="$imageLoc"."$user_id/"."$unique_name.png";
    		//dd($imageFullLoc);
                        //dd($imageFullLoc);
                   //dd($relativeUrl);
                   try
                   {
                     $image=Image::make($imageFullLoc)->orientate();

                 }
                 catch(\Exception $e)
                 {
                    return back()->withErrors($e->getMessage());
                }

                   $res=$image->save($imageFullLoc);

    		
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
    					$newPost->private = $data['privacy'];
    		
    					if($newPost->save())
    					{
    						$url=$serverUrl.$newPost->from_id."/postid/".$newPost->post_thank_id."?redirect-url=/registered/uid/".$newPost->from_id."/postid/".$newPost->post_thank_id;
    						$reg_url="/registered/uid/".$newPost->from_id."/postid/".$newPost->post_thank_id;
    						//dd($newPost->post_thank_id);
    						try
    							{
    								$neRegUrlLinkEntry = new reg_url_links;
    								$neRegUrlLinkEntry->post_id = $newPost->post_thank_id;
    								$neRegUrlLinkEntry->session_id = $sessionData;
    								$neRegUrlLinkEntry-> used = false;
    								$neRegUrlLinkEntry->url = $reg_url;
    								$neRegUrlLinkEntry->user_id = \Auth::id();
    								
    								$neRegUrlLinkEntry->save();
       							}
       							catch (\Exception $e)
       							{
       								
       								return back()->withErrors($e->getMessage());
       									
       							}
    				//dd($newPost->id);
     					dispatch(new SendNotificationEmails($user,$url,$data['name'],$data['email']));
    						if ($data['surprise']==0)
							{
							
								//Make the temporary database entry here for the to and from 
								 $new_temp = new purchase_temps;
								 
								 $new_temp->to_id = '';
								 $new_temp->from_id = \Auth::id();
								 $new_temp->to_email= $data['email'];
								 $new_temp->session_id = $sessionData;
								 $new_temp->post_id = $newPost->post_thank_id;
								 $new_temp->to_name = $data['name'];
								 if ($new_temp->save())
								 {
										$products=products::all();
										return view('buy-something1',compact('products'))
											->with('to_email',$newPost->to_email)
											->with('to_name',$newPost->to_name);
								 }
								 else
								 {
								 		\Session::flash('flash_message','Something went wrong, Your purchase was unsuccessful!');
    									return view('payment-success');
								 }
							}
							else
							{
    							return redirect('/feed');
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
    					$newPost->private = $data['privacy'];
    		
    					if($newPost->save())
    					{
    						if ($data['privacy'])
    						{
    							$url=$serverUrl."to/".$newPost->post_thank_id;
    						}
    						else
    						{
    							$url=$serverUrl."showpostsv3/postid/".$newPost->post_thank_id;
    						}
    					//dd($newPost->id);
     					dispatch(new SendNotificationEmails($user,$url,$toUser->name,$newPost->to_email));
                        $result=$this->notificationToSlack($user,$url,$toUser->name,$newPost->from_name,$toUser);
							if ($data['surprise']==0)
							{
							
								 		$new_temp = new purchase_temps;
								 
								 		$new_temp->to_id = $toUser->id;
								 		$new_temp->from_id = \Auth::id();
								 		$new_temp->to_email= $toUser->email;
								 		$new_temp->session_id = $sessionData;
								 		$new_temp->post_id = $newPost->post_thank_id;
								 		$new_temp->to_name = $toUser->name;
								if ($new_temp->save())
								 {
										
										$products=products::all();
										//dd($products);
										return view('buy-something1',compact('products'))
											->with('to_email',$newPost->to_email)
											->with('to_name',$newPost->to_name);
								 }
								 else
								 {
								 		\Session::flash('flash_message','Something went wrong, Your purchase was unsuccessful!');
    									return view('payment-success');
								 }
							}
							else
							{
    							return redirect('/feed');
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
    					$newPost->private = $data['privacy'];
    					if($newPost->save())
    					{
    					
    								$url=$serverUrl."emaillink/uid/".$newPost->from_id."/postid/".$newPost->post_thank_id."?redirect-url=/registered/uid/".$newPost->from_id."/postid/".$newPost->post_thank_id;
    								$reg_url="/registered/uid/".$newPost->from_id."/postid/".$newPost->post_thank_id;
    							
    							try
    							{
                                    //dd("coming here???");
    								$neRegUrlLinkEntry = new reg_url_links;
    								$neRegUrlLinkEntry->post_id = $newPost->post_thank_id;
    								$neRegUrlLinkEntry->session_id = $sessionData;
    								$neRegUrlLinkEntry-> used = false;
    								$neRegUrlLinkEntry->url = $reg_url;;
    								$neRegUrlLinkEntry->user_id = \Auth::id();
    								
    								$neRegUrlLinkEntry->save();
       							}
       							catch (\Exception $e)
       							{
       								dd($e->getMessage());
       								return back()->withErrors($e->getMessage());
       									
       							}
    				//dd($newPost->id);
     					dispatch(new SendNotificationEmails($user,$url,$data['name'],$data['email']));
    						if ($data['surprise']==0)
							{
							             
								 		$new_temp = new purchase_temps;
								 
								 		//$new_temp->to_id = $toUser->id;
								 		$new_temp->from_id = \Auth::id();
								 		$new_temp->to_email= $data['email'];
								 		$new_temp->session_id = $sessionData;
								 		$new_temp->post_id = $newPost->post_thank_id;
								 		$new_temp->to_name = $data['name'];
								if ($new_temp->save())
								 {
										
										$products=products::all();
										//dd($products);
										return view('buy-something1',compact('products'))
											->with('to_email',$newPost->to_email)
											->with('to_name',$newPost->to_name);
								 }
								 else
								 {
								 		\Session::flash('flash_message','Something went wrong, Your purchase was unsuccessful!');
    									return view('payment-success');
								 }
							}
							else
							{
                                dd("This is where its coming");
    							return redirect('/feed');
    						}
    				
    					}
    			
    				}
    			
    			}	
    			
    	
    	// catch(\Exception $e)
//     	{
//     		//echo $e->getMessage();
//     		// dd('test', $ex->getMessage());
//      		return back()->withErrors($e->getMessage())->withInput();
//     	}		
    				
    				
    		
    		
    		
    		
    		

    }
    public function notificationToSlack($user,$url,$toUser,$from_name,$touser)
    {
                        $slackChannel=UserProfiles::where('id',$touser->id)->get(['slack_channel'])->first();
                        if (isset($slackChannel)) {
                            if (is_null($slackChannel->slack_channel))
                            {
                                return 200;
                            }
                            else
                            {
                                $userToBeNotified=User::find($touser->id);
                                $userToBeNotified->notify(new ThankYouMessageSent($user,$url,$touser->name,$from_name));
                            }
                            return 200;
                        }
                        else 
                        {
                            return 200;
                        }
                        
    }
    public function emailLink(Request $request,$id,$postid)
    {
    	
    	$toName=user_thanks::where('post_thank_id',$postid)->get(['to_name'])->first();
    	$usedLinkCheck= reg_url_links::where('post_id',$postid)->first();

    // 	if (\Auth::id())
//     	{
//     		if 
//     		return $this->ShowPostId($postid);
//     	}
//     	else 
    	if($usedLinkCheck->used)
    	{	
    		$privacy=user_thanks::where('from_id', $id)
          	->where('post_thank_id',$postid )
          	->get(['private'])->first();
          	
          	if(!$privacy->private)
    		{
    		
    				return redirect('/home');
    			
    		}
    		else
    		{
    				return redirect('/to/'.$postid);	
    		}
          	
    		return $this->ShowPostId($postid);
    	}
    	else
    	{
    		$redirectUrl=$request['redirect-url'];
    		//dd($refererUrl);
    		//dd($request['redirect-url']);
    		return view('create-user')
    				->with('redirectUrl',$redirectUrl)
                    ->with('toName',$toName->to_name)    ;
    	}
    
    
    }
    public function registeredLink($id,$postid)
    {
    
    	if ($user=\Auth::user())
    	{
    		
    		$status=user_thanks::where('from_id', $id)
          	->where('post_thank_id',$postid )
          	->update(['to_id' => $user->id]);
          	//Get the privacy flag to redirect appropriately
          	$privacy=user_thanks::where('from_id', $id)
          	->where('post_thank_id',$postid )
          	->get(['private'])->first();
    	
    	
    	
    			if($status && !$privacy->private)
    			{
    		
    					return redirect('/showpostsv3/postid/'.$postid);
    			
    		
    			}
    			else if($status && $privacy->private)
    			{
    				return redirect('/to/'.$postid);
    			
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
        $CommentsOnPosts1=[];
        $CommentsOnPosts2=[];
        $profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        $ThankedBy = user_thanks::where('from_id',\Auth::id())->where('private',0)->orderBy('created_at','desc')->simplePaginate(5);

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
        	// return view('your-thank-wall',compact('ThankedBy','CommentsOnPosts'))
//         				->with('image',$profileImageEmpty->image);
        				
        	$result=compact('ThankedBy','CommentsOnPosts2');
            return $result;			
        }
        //return view('/home',compact('ThankedBy'));
        //dd($request->server('HTTP_REFERER'));
        
        //return view('your-thank-wall',compact('ThankedBy','CommentsOnPosts'));
    }
    
	public function showThankedYou($id)
    {
    	$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
    	$ThankedBy = user_thanks::where('to_id',\Auth::id())->where('private',0)->orderBy('created_at','desc')->simplePaginate(5);
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
    	$ThankedBy = user_thanks::where('post_thank_id',$postid)->where('private',0)->simplePaginate(1);
    	//$CommentsOnPosts= user_thanks_comments::all();
    	$CommentsOnPosts= user_thanks_comments::where('post_id',$postid)->orderBy('created_at','desc')->get();
    	
    	if ($profileImageCheck)
        {
        	// return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
//         				->with('image',$profileImageCheck->image);
        	return view('single-post-1-0',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	// return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
//         				->with('image',$profileImageEmpty->image);
        	return view('single-post-1-0',compact('ThankedBy','CommentsOnPosts'))
        				->with('image',$profileImageEmpty->image);			
        }
    	
//     	return view('/home',compact('ThankedBy','CommentsOnPosts'));
    
    }
    public function ShowPostIdv3($postid)
    {
        $loggedInFlag=\Auth::check();
        $CommentsOnPosts1=[];
        $CommentsOnPosts2=[];
        $profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
        $ThankedBy = user_thanks::where('post_thank_id',$postid)->where('private',0)->simplePaginate(1);
        //$CommentsOnPosts= user_thanks_comments::all();
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
            // return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
//                      ->with('image',$profileImageCheck->image);
            $result=compact('ThankedBy','CommentsOnPosts2','profileImageCheck','loggedInFlag');
            return $result;
                        
        }
        else 
        {
            $profileImageEmpty = new UserProfiles;
            // return view('show-post-id',compact('ThankedBy','CommentsOnPosts'))
//                      ->with('image',$profileImageEmpty->image);
            $result=compact('ThankedBy','CommentsOnPosts2','profileImageCheck','loggedInFlag');
            return $result;       
        }
        
//      return view('/home',compact('ThankedBy','CommentsOnPosts'));
    
    }
    
    public function feed()
    {
        return view('feed');
    }
    public function showTopFivePosts()
    {
    	//sleep(5);
        //Logged in check
        $loggedInFlag=\Auth::check();

        $CommentsOnPosts1=[];
        $CommentsOnPosts2=[];
    	$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();	
    	$ThankedBy = user_thanks::where('private',0)->orderBy('created_at','desc')->simplePaginate(15);
        
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
            $result=compact('ThankedBy','CommentsOnPosts2','profileImageCheck','loggedInFlag');
            return $result;
            // return view('blog-default-aside-both-1-0',compact('ThankedBy','CommentsOnPosts'))
            //          ->with('image',$profileImageCheck->image);
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	// return view('latest-ten-posts',compact('ThankedBy','CommentsOnPosts'))
//         				->with('image',$profileImageEmpty->image);
        
        	//return view('blog-default-aside-both-1-0',compact('ThankedBy','CommentsOnPosts'))
        				//->with('image',$profileImageEmpty->image);
            $result=compact('ThankedBy','CommentsOnPosts2','loggedInFlag');
            return $result;
            //return $ThankedBy;
        
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
    public function viewTp($id)
    {
    	$userOnId = User::where('id',$id)->get()->first();
    	$profileImageCheck = UserProfiles::where('id',\Auth::id())->get(['image'])->first();
    	$Thanked = user_thanks::where('from_id',$id)->where('private',0)->orderBy('created_at','desc')->simplePaginate(20); 
        $ThankedBy = user_thanks::where('to_id',$id)->where('private',0)->orderBy('created_at','desc')->simplePaginate(20);
        $CommentsOnPosts= user_thanks_comments::all();
        
        if ($profileImageCheck)
        {
        	// return view('your-thank-profilewall',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
//         				->with('image',$profileImageCheck->image);
        	return view('profile-1-0-tp',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
        				->with('image',$profileImageCheck->image);			
        }
        else 
        {
        	$profileImageEmpty = new UserProfiles;
        	// return view('your-thank-profilewall',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
//         				->with('image',$profileImageEmpty->image);
				return view('profile-1-0-tp',compact('ThankedBy','CommentsOnPosts','userOnId','Thanked'))
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
    		return "You have already liked the story";
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
    public function heartThePost($postid)
    {
        $user = \Auth::user();
        //Already liked check
        $likedOrNot = create_addnl_posts_infos::where('post_thank_id',$postid)->where('id',$user->id)->get();
        
        if (count($likedOrNot)>0)
        {
            //return ->withErrors(['msg', 'You have liked this story already']);;
                create_addnl_posts_infos::where('post_thank_id',$postid)->where('id',$user->id)->delete();
                $posturl = 'http://www.thankingli.com/showposts/postid/'.$postid;
                $ownerPost = user_thanks::where('post_thank_id',$postid)->get(['from_id'])->first();
                $ownerPostUser = user::where('id',$ownerPost->from_id)->get(['name','email'])->first();
                
                //name of person who liked - post url - name of the person owning the post - email of person owning the post
                //dispatch(new SendLikeEmail($user->name,$posturl,$ownerPostUser->name,$ownerPostUser->email));
                    return response('removed like', 201);
                
            //return "You have already liked the story";
        }
        else
        {
            
                $likedPostObject = new create_addnl_posts_infos;
                $likedPostObject->id = $user->id;
                $likedPostObject->post_thank_id = $postid;
                $likedPostObject->heart = 1;
                $posturl = 'http://www.thankingli.com/showposts/postid/'.$postid;
                $ownerPost = user_thanks::where('post_thank_id',$postid)->get(['from_id'])->first();
                $ownerPostUser = user::where('id',$ownerPost->from_id)->get(['name','email'])->first();
                if ($likedPostObject->save())
                {
                //name of person who liked - post url - name of the person owning the post - email of person owning the post
                    dispatch(new SendLikeEmail($user->name,$posturl,$ownerPostUser->name,$ownerPostUser->email));
                    return 200;
                }
            
            
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headers()
    {
    	return $_SERVER;
    }
    
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
