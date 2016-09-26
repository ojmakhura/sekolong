<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupInstance extends Model
{    
    protected $fillable =  ['year', 'instance_name', 'group_id', 'user_id', 'created_at', 'updated_at'];
    
    public function group(){
		return $this->hasOne('App\Group');
	}
	
    public function user(){
		return $this->hasOne('App\User');
	}	
}
