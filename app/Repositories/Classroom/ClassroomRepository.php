<?php
namespace App\Repositories\Classroom;

use App\Repositories\EloquentRepository;
use App\Repositories\Classroom\ClassroomRepositoryInterface;
use App\Models\Classes;

class ClassroomRepository extends EloquentRepository implements ClassroomRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Classes::class;
    }
}
