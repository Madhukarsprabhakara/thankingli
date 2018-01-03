<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class purchase_codes extends Model
{
    //
    use Notifiable;
    use Searchable;
    
    
    protected $table = 'purchase_codes';
    protected $primaryKey = 'id';
}
