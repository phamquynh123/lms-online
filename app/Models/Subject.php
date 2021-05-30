<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $guarded= [];

    public function class()
    {
        return $this->hasMany('App\Models\Class', 'subject_id');
    }
}
