<?php

namespace App\Repositories\Course;

use App\Repositories\EloquentRepository;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Models\Course;

class CourseRepository extends EloquentRepository implements CourseRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Course::class;
    }
}
