<?php
namespace App\Repositories\Document;

use App\Repositories\EloquentRepository;
use App\Repositories\Document\DocumentRepositoryInterface;
use App\Models\Document;

class DocumentRepository extends EloquentRepository implements DocumentRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Document::class;
    }
}
