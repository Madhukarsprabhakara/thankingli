<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\sub_categories;
use App\Http\Controllers\LogsController;
class CategoriesController extends Controller
{
    //

    public function PopulateCategoriesMenu()
    {
    	try {
    		$storecategory=[];
    		$categories=\DB::table('categories')->get();
    		foreach ($categories as $category)
    		{
    			$sub_categories=\DB::table('sub_categories')->where('cat_id',$category->cat_id)->get();
    			foreach ($sub_categories as $sub_category)
    			{
    				$category = (array)$category;
    				$subcat['sub_cat_name']=$sub_category->sub_cat_name;
    				$subcat['sub_cat_id']=$sub_category->sub_cat_id;
    				$category['sub_categories'][]=$subcat;
    				
    				

    			}
    			array_push($storecategory, $category);
    		}
    		
    		$logObject = new LogsController($storecategory,"200","Category Sub Category");	
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    	catch(\Exception $e)
    	{
    		$logObject = new LogsController("","400",$e->getMessage());
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    	

    }
    public function getSubCategoryBasedOnCategory(Request $request)
    {
    	try {
    		$sub_cat=array();
    		$sub_categories=\DB::table('sub_categories')->where('cat_id',$request['cat_id'])->get();
    		foreach ($sub_categories as $sub_category)
    		{
    				$subcat['sub_cat_name']=$sub_category->sub_cat_name;
    				$subcat['sub_cat_id']=$sub_category->sub_cat_id;
    				$category['sub_categories'][]=$subcat;
    		}
    		$logObject = new LogsController($category,"200","Category Sub Category");	
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    	catch(\Exception $e)
    	{
    		$logObject = new LogsController("","400",$e->getMessage());
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    }
    public function getSubCategoryBasedonCategories(Request $request)
    {
    	try {
    		$sub_cat=array();
    		$category=array();
    		$cat_arr=$request['cat_id'];
    		foreach ($cat_arr as $cat_id)
    		{
    			$sub_categories=\DB::table('sub_categories')->where('cat_id',$cat_id)->get();
    			foreach ($sub_categories as $sub_category)
    			{
    				$subcat['sub_cat_name']=$sub_category->sub_cat_name;
    				$subcat['sub_cat_id']=$sub_category->sub_cat_id;
    				$category['sub_categories'][]=$subcat;
    			}
    		}
    		$logObject = new LogsController($category,"200","Category Sub Category");	
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    	catch(\Exception $e)
    	{
    		$logObject = new LogsController("","400",$e->getMessage());
    		$data=$logObject->dataFormattediwthStatus();
    		return $data;
    	}
    }
}
