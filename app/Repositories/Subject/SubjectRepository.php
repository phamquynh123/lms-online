<?php

namespace App\Repositories\Subject;

use App\Repositories\EloquentRepository;
use App\Repositories\Subject\SubjectRepositoryInterface;
use App\Models\Subject;

class SubjectRepository extends EloquentRepository implements SubjectRepositoryInterface
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
