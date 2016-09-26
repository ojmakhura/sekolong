<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    
    public function type(){
		return $this->hasOne('App\GroupType');
	}
}
