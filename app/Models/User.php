<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'avatar',
        'role_id',
        'status',
        'password',
        'email',
        'email_verified_at',
        'provider',
        'provider_id',
        'phone',
        'verify_phone',
        'description',
        'note',
        'show_intro',
        'subject'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }

    public function classes()
    {
        return $this->belongsToMany('App\Models\Classes', 'class_infors', 'student_id', 'class_id')->where('class_infors.status', 1);
    }

    public function classStudying()
    {
        return $this->hasMany('App\Models\Classes', 'teacher_id', 'class_id')->where('status', config('messages.happenning'));
    }

}
