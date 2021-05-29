<?php
namespace App\Repositories\Class;

use App\Repositories\EloquentRepository;
use App\Repositories\Class\ClassesRepositoryInterface;
use App\Models\Classes;

class ClassesRepository extends EloquentRepository implements ClassesRepositoryInterface
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
