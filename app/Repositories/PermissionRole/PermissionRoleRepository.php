<?php

namespace App\Repositories\PermissionRole;

use App\Models\PermissionRole;
use App\Repositories\PermissionRole\PermissionRoleRepositoryInterface;
use App\Repositories\EloquentRepository;

class PermissionRoleRepository extends EloquentRepository implements PermissionRoleRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return PermissionRole::class;
    }

}
