<?php
namespace App\Repositories\LessonDocument;

use App\Repositories\LessonDocument\LessonDocumentRepositoryInterface as inteface;
use App\Repositories\EloquentRepository;
use App\Models\LessonDocument;

class LessonDocumentRepository extends EloquentRepository implements inteface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return LessonDocument::class;
    }

    public function checkExist($data)
    {
    	$data = $this->_model->where('class_id', $data['class_id'])->where('lesson_id', $data['lesson_id'])->where('document_id', $data['document_id'])->get();

    	return $data;
    }
}
