<?php
namespace App\Repositories\ClassInfo;

use App\Repositories\EloquentRepository;
use App\Repositories\ClassInfo\ClassInfoRepositoryInterface
use App\Models\ClassInfor;

class ClassInfoRepository extends EloquentRepository implements ClassInfoRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return ClassInfor::class;
    }
}
