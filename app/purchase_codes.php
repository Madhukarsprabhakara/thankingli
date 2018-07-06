<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class purchase_codes extends Model
{
    //
	use Searchable;
    
    
    protected $table = 'purchase_codes';
    protected $primaryKey = 'id';
}
