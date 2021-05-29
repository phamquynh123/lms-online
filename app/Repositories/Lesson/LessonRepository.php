<?php
namespace App\Repositories\Lesson;

use App\Repositories\EloquentRepository;
use App\Repositories\Lesson\LessonRepositoryInterface;
use App\Models\Lesson;

class LessonRepository extends EloquentRepository implements LessonRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Lesson::class;
    }
}
