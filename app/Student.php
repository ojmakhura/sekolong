<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{    
    protected $fillable = [
        'name', 'surname', 'middle_name',
    ];
    
    public function startLevel(){
		return $this->hasOne('App\Level');
	}
	
    public function endLevel(){
		return $this->hasOne('App\Level');
	}
	
    public function currentLevel(){
		return $this->hasOne('App\Level');
	}
}
