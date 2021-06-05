<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;
    protected $table = 'lessons';
    protected $fillable = [
        'class_id',
        'name',
        'schedule_time',
        'num_of_lesson',
        'is_test',
        'description'
    ];
}
