<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';
    
    protected $softDelete = true;

    protected $guarded = [];
}
