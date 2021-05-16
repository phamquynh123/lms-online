<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassInfor extends Model
{
    protected $table = 'class_infors';
    
    protected $softDelete = true;

    protected $guarded = [];
}
