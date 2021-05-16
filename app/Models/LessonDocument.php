<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonDocument extends Model
{
    protected $table = 'lesson_document';
    
    protected $softDelete = true;

    protected $guarded = [];
}
