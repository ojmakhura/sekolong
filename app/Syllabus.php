<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    
    protected $fillable = [
        'name', 'syllabus', 'level_id',
    ];
    
    public function level(){
		return $this->hasOne('App\Level');
	}
	
    public function subject(){
		return $this->hasOne('App\Subject');
	}
	
    public function nextSyllabus(){
		return $this->hasOne('App\Syllabus', 'next_syllabus');
	}
	
    public function prevSyllabus(){
		return $this->hasOne('App\Syllabus', 'prev_syllabus');
	}
}
