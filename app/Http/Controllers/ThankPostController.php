<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_thanks;
use App\user_thanks_comments;
use App\User;
use Closure;
use Image;
class ThankPostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['emailLink','registeredLink']);
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
    			'thank-descr'=>'required|max:500',
    			'image'=> 'nullable|image|mimes:jpeg,jpg,png|max:2000'
    			
    			
    			
    		]);
    		$data = $request->all();
    		$file = request()->file('image');
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
 			$image->fit(600, 300)->save($imageFullLoc);

 			//$image->save($imageFullLoc);
    		//$image->resize(600, 300);
    		
    		
    		
    		
    		$exists=User::where('email', $data['email'])->exists();
    		
    		if ($exists)
    		{
    			$toUser= User::where('email', $data['email'])->first();
    			$newPost->from_id = \Auth::id();
    			$newPost->from_name = $user->name;
    			$newPost->to_name = $toUser->name;
    			$newPost->to_email = $toUser->email;
    			$newPost->to_id = $toUser->id;
    			//return 'great';
    			$newPost->image = $relativeUrl;
    			$newPost->thank_title = $data['thank-title'];
    			$newPost->thank_description = $data['thank-descr'];
    		
    			if($newPost->save())
    			{
    				
    				return redirect('/thankwall');
    				
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
    			$newPost->image = $relativeUrl;
    			$newPost->thank_title = $data['thank-title'];
    			$newPost->thank_description = $data['thank-descr'];
    		
    			if($newPost->save())
    			{
    				
    				return redirect('/thankwall');
    				
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
        $ThankedBy = user_thanks::where('to_id',\Auth::id())->get();
        //$ThankComments = user_thanks_comments::
        
        return view('/home',compact('ThankedBy'));
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
        $ThankedBy = user_thanks::where('from_id',\Auth::id())->get();
        $CommentsOnPosts= user_thanks_comments::all();
        //return view('/home',compact('ThankedBy'));
        //dd($request->server('HTTP_REFERER'));
        
        return view('your-thank-wall',compact('ThankedBy','CommentsOnPosts'));
    }
    
	public function showThankedYou($id)
    {
    	$ThankedBy = user_thanks::where('to_id',\Auth::id())->get();
        $CommentsOnPosts= user_thanks_comments::all();
        return view('/home',compact('ThankedBy'));
        //
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
