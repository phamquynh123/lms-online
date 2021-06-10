<?php

namespace App\Repositories\Permission;

use App\Models\Permission;
use App\Repositories\Permission\PermissionRepositoryInterface;
use App\Repositories\EloquentRepository;

class PermissionRepository extends EloquentRepository implements PermissionRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Permission::class;
    }

}
