<?php
namespace App\Repositories\Exercise;

use App\Repositories\EloquentRepository;
use App\Repositories\Exercise\ExerciseRepositoryInterface;
use App\Models\Exercise;

class ExerciseRepository extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Exercise::class;
    }
}
