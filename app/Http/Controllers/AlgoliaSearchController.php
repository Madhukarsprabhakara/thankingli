<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helppost;
use App\Http\Controllers\LogsController;
use App\User;
use App\categories;
use App\sub_categories;

class AlgoliaSearchController extends Controller
{
    //$searchString, $filters
    public function __construct()
    {

    }
    public function initializeAlgolia()
	{
		//set the Account ID and Secret to the desired account - this is currently set to test
		$client = new \AlgoliaSearch\Client('WILMJ7V9GX', '3af07b37d4b615f2bcb4c3a35c506c45');
        return $client;
	}
	public function searchHelpPosts(Request $request)
	{
		try {

			//initialize index
			//fire a browse query if there is no searchstring present
			//if there is a search string, fire that
			//if there is a filter use that
			$this->validate(request(), [
            	'searchstring' => 'nullable|string|max:255',
            	'filter' => 'nullable|array'
        	]);

			if (count($request['filter'])>0)
			{
				
				$filter=$this->filterFormat($request['filter']);
				//return $filter;
			}
			else
			{
				$filter=null;
			}
			
			$query=$request['searchstring'];
			$indexName="helpposts";
			$client = $this->initializeAlgolia();
			$index=$client->initIndex($indexName);
			//$searchResult=$index->search($query);
			if (is_null($filter))
			{	

				$searchResult=$index->search($query,[


                


            ]);

			}
			else 
			{
				$searchResult=$index->search($query,[


                'filters' => $filter,


            ]);
			}
			
            
            //return $filter;
			return $searchResult;

		}
		catch(\Exception $e)
		{
				$logObject = new LogsController("","400",$e->getMessage());
            	$data=$logObject->dataFormattediwthStatus();
            	return $data;
		}
	}
	public function filterFormat(array $filter)
	{
		try {
			$count=1;
			if(!is_null($filter))
			{
				if (count($filter)>1)
				{
					$formattedFilter='(';
					for ($i=0;$i<count($filter);$i++)
					{
						$sub_cat_name=\DB::table('sub_categories')->where('sub_cat_id',$filter[$i])->get(['sub_cat_name']);
						$sub_cat_name=json_decode($sub_cat_name,true);
						
						if (count($filter)==$count)
						{
							$formattedFilter=$formattedFilter.'sub_cat_name:'.'"'.$sub_cat_name[0]['sub_cat_name'].'"';
						}
						else
						{
							$formattedFilter=$formattedFilter.'sub_cat_name:'.'"'.$sub_cat_name[0]['sub_cat_name'].'"'.' '.'OR'.' ';
							$count++;
						}
						
					}
					$formattedFilter=$formattedFilter.')';
					return $formattedFilter;
				}
				else
				{
					$sub_cat_name=\DB::table('sub_categories')->where('sub_cat_id',$filter[0])->get(['sub_cat_name']);
					$sub_cat_name=json_decode($sub_cat_name,true);
					$formattedFilter='('.'sub_cat_name:'.'"'.$sub_cat_name[0]['sub_cat_name'].'"'.')';
				}

				return $formattedFilter;
			}
			else {
				return null;
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
