<?php
namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Repositories\LessonExercise\LessonExerciseRepositoryInterface as interface;
use App\Models\LessonExercise;

class LessonExerciseRepository extends EloquentRepository implements interface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return LessonExercise::class;
    }
}
