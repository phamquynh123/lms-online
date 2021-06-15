<?php
namespace App\Repositories\Course;

use App\Repositories\EloquentRepository;
use App\Models\Subject;

class SubjectRepository extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Subject::class;
    }
}
