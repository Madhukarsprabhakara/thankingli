<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;
class User extends Authenticatable
{
    use Notifiable;
	use Searchable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    //public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles()
    {
        return $this
            ->belongsToMany('App\Role')
            ->withTimestamps();
    }
    public function routeNotificationForSlack()
    {
        $slackChannel=UserProfiles::where('id',$this->id)->get(['slack_channel'])->first();
        return $slackChannel->slack_channel;
    }
}
