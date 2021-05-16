<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonExercise extends Model
{
    protected $table = 'lesson_exercise';
    
    protected $softDelete = true;

    protected $guarded = [];
}
