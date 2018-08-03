<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helppost;
use App\Http\Controllers\LogsController;
use App\User;
use App\categories;
use App\sub_categories;
use Carbon\Carbon;
class AlgoliaIndexController extends Controller
{
  
    public function initializeAlgolia()
	{
		//set the Account ID and Secret to the desired account - this is currently set to test
		$client = new \AlgoliaSearch\Client('WILMJ7V9GX', '3af07b37d4b615f2bcb4c3a35c506c45');
        return $client;
	}
	public function createHelpObjectToIndex(helppost $helpPost)
	{
		//$helpObj= new helppost;
		try {
			$dt = Carbon::parse($helpPost['created_at']);
			$unixtime= $dt->timestamp;
			$from_name=User::where('id',$helpPost['from_id'])->get(['name'])->first();
			$cat_name=categories::where('cat_id',$helpPost['cat_id'])->get(['cat_name'])->first();
			$sub_cat_name=sub_categories::where('sub_cat_id',$helpPost['sub_cat_id'])->get(['sub_cat_name'])->first();
			$helpPost['from_name']=$from_name['name'];
			$helpPost['cat_name']=$cat_name['cat_name'];
			$helpPost['sub_cat_name']=$sub_cat_name['sub_cat_name'];
			$helpPost['created_at_unix']=$unixtime;
			$response=$this->indexObject($helpPost);
			return $response;
			
		}
		catch(\Exception $e) 
		{
				$logObject = new LogsController("","400",$e->getMessage());
            	$data=$logObject->dataFormattediwthStatus();
            	return $data;
		}
		
	}
	public function indexObject($algObj)
	{

		try {
			$algObj1[]=$algObj;
			$indexName="helpposts";
			$client = $this->initializeAlgolia();
			$index=$client->initIndex($indexName);
			$res=$index->addObjects($algObj1);
			if (isset($res['objectIDs']))
			{
				$logObject = new LogsController("","200","Help post indexed");
    			$data=$logObject->dataFormattediwthStatus();
    			return $data;
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
