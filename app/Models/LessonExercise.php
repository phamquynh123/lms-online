<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonExercise extends Model
{
    protected $table = 'lesson_excercie';
    protected $fillable = [
        'lesson_id',
        'exercise_id',
        'deadline',
        'class_id'
    ];

    public function exercise()
    {
        return $this->hasMany('App\Models\Exercise', 'id', 'exercise_id');
    }
}
