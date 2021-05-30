<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'name',
        'course_id',
        'teacher_id',
        'assistance_id',
        'status',
        'time_start',
        'description',
        'zoom_id',
        'form_study',
        'created_user',
        'updated_user',
    ];

    public function subject() 
    {
        return $this->belongsTo('App\Models\Subject', 'subject_id', 'id');
    }

    public function course() 
    {
        return $this->belongsTo('App\Models\Subject', 'course_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'teacher_id', 'id');
    }

    public function classInfor()
    {
        return $this->hasMany('App\Models\ClassInfor', 'id', 'class_id');
    }
}
