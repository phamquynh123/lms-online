<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $table = 'classes';
    
    protected $softDelete = true;

    protected $guarded = [];

}
