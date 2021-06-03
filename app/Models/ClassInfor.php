<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassInfor extends Model
{
    protected $table = 'class_infors';
    protected $fillable = [
        'class_id',
        'student_id',
        'status'
    ];

    public function classes()
    {
        return $this->belongsTo('App\Models\Classes', 'class_id', 'id');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User', 'id', 'student_id');
    }
}
