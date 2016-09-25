<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable =  ['code', 'role', 'description', 'created_at', 'updated_at'];
}
