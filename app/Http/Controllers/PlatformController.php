<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\user_thanks;
use App\user_thanks_comments;
use App\UserProfiles;
class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
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
