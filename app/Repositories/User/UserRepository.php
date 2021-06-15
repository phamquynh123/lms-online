<?php

namespace App\Repositories\User;

use App\Repositories\EloquentRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Models\User;

// class UserRepository extends EloquentRepository implements UserRepositoryInterface
class UserRepository extends EloquentRepository implements UserRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }

    public function getListTeacherClient()
    {
        $data = $this->_model::where('role_id', config('messages.roleTeacher'))->where('status', config('messages.active'))->orderBy('created_at', 'DESC')->take(3)->get();
        return $data;
    }
}
