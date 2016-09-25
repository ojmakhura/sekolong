<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable =  ['code', 'level', 'prev_level', 'next_level', 'description', 'created_at', 'updated_at'];
}
