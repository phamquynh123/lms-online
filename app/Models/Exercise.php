<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    use SoftDeletes;

    protected $table = 'exercises';
    protected $fillable = [
        'title',
        'slug',
        'content',
        'subject_id',
        'course_id',
        'status'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'id');
    }
}
