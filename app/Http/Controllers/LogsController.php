<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogsController extends Controller
{
    //
    public $data;
    public $status;
    public $message;

	 public function __construct($data,$status,$message)
	 {
	 			$this->data=$data;
	 			$this->status=$status;
	 			$this->message=$message;
	 }
    public function dataFormattediwthStatus()
    {
            if ($this->data)
            {
                $data['data']=$this->data;
            }
            else
            {
              $data['data']=(object)$this->data;  
            }
    		
    		$data['status']=$this->status;
    		$data['message']=$this->message;
    		return $data;

    }
}
