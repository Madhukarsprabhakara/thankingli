<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class user_thanks extends Model
{
	//use Searchable;
    //
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user_thanks';
    protected $primaryKey = 'post_thank_id';
    
    
    //public $timestamps = false;
}
