<?php
namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Repositories\LessonExercise\LessonExerciseRepositoryInterface;
use App\Models\LessonExercise;
class LessonExerciseRepository extends EloquentRepository implements LessonExerciseRepositoryInterface
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
