<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LogsController;
use Illuminate\Support\Facades\Auth;
class CustomSessionsController extends Controller
{
    //
    
    public function create()
    {
    	return view('auth.login-1-0');
    }	
    protected function loggedIn()
    {
    	try {
    		if (\Auth::check())
    		{
    			$logObject = new LogsController(["Id"=>\Auth::id()],"200","LoggedIn");	
    			$data=$logObject->dataFormattediwthStatus();
    			
    			
    			return $data;
    		}
    		else
    		{
    			$logObject = new LogsController("","400","Not Logged In");	
    			$data=$logObject->dataFormattediwthStatus();
    			return $data;
    		}
    	}
    	catch (\Exception $e)
    	{
    			$logObject = new LogsController("","500",$e->getMessage());	
    			$data=$logObject->dataFormattediwthStatus();
    			return $data;
    	}
    	
    }
    protected function csrfToken()
    {
    			try {
    				$logObject = new LogsController(["csrf_field"=>csrf_token()],"200","Success");	
    				$data=$logObject->dataFormattediwthStatus();
    				return $data;
    			}
    			catch (\Exception $e)
    			{
    				$logObject = new LogsController(["csrf_field"=>csrf_token()],"400",$e->getMessage());	
    				$data=$logObject->dataFormattediwthStatus();
    				return $data;
    			}
    			
    			
    			
    			
    			
    }
    protected function loginV4(Request $request)
    {

    		try {
    			//dd($request);
    			$this->validateRequestV4($request);
    			if ($this->attemptLoginv4($request))
    			{
    				$logObject = new LogsController("","200","Login Successful");
    				$data=$logObject->dataFormattediwthStatus();
    				return $data;
    			}
    			else
    			{
    				$logObject = new LogsController("","401","User and/or Password doesn't match");
    				$data=$logObject->dataFormattediwthStatus();
    				return $data;
    			}
    		}
    		catch (\PDOException $e)
    		{
    				$logObject = new LogsController("","400",$e->getMessage());
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
    protected function validateRequestV4(Request $request)
    {
    	try {
    			$this->validate($request, [
            	$this->username() => 'required|string',
            	'password' => 'required|string',
        	]);
    	}
    	catch (\PDOException $e)
    		{
    				$logObject = new LogsController("","400",$e->getMessage());
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
    protected function attemptLoginv4(Request $request)
    {
    	//dd($request);	
    	try {
    		return Auth::attempt(['email' => $request['email'], 'password' => $request['password']], $request->has('remember')
        );
    	}
    	catch (\PDOException $e)
    		{
    				$logObject = new LogsController("","400",$e->getMessage());
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

    
}
