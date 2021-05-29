<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    
    protected $guarded = [];

    public function class()
    {
        return $this->hasMany('App\Models\Class', 'subject_id');
    }
}
