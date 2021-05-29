<?php
namespace App\Repositories\LessonDocument;

use App\Repositories\LessonDocument\LessonDocumentRepositoryInterface as inteface;
use App\Repositories\EloquentRepository;
use App\Models\LessonDocument;

class LessonDocumentRepository extends EloquentRepository implements interface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return LessonDocument::class;
    }
}
