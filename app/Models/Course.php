<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $table = 'course';
    
    protected $guarded = [];

    public function class()
    {
        return $this->hasMany('App\Models\Class', 'subject_id');
    }
}
