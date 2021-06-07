<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $table = 'homework';
    protected $fillable = [
        'lesson_id',
        'user_id',
        'classroom_id',
        'lession_exercise_id',
        'content',
        'time_commit',
        'status',
        'mark',
        'comment',
        'time_marking',
    ];
}
