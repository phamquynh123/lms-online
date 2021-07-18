<?php
namespace App\Repositories\LessonExercise;

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

    public function checkExist($data)
    {
    	$data = $this->_model->where('class_id', $data['class_id'])->where('lesson_id', $data['lesson_id'])->where('excercise_id', $data['exercise_id'])->get();

    	return $data;
    }
}
