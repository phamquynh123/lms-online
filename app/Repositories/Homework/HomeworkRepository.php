<?php
namespace App\Repositories\Homework;

use App\Repositories\EloquentRepository;
use App\Repositories\Homework\HomeworkRepositoryInterface;
use App\Models\Homework;

class HomeworkRepository extends EloquentRepository implements HomeworkRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Homework::class;
    }

    public function findHomeworkAnswer($attr1, $attr2, $attr3)
    {
        $data = Homework::where('lesson_id', $attr1)->where('lession_exercise_id', $attr2)->where('user_id', $attr3)->orderBy('id', 'desc')->first();

        return $data;
    }
}
