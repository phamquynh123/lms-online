<?php

namespace App\Repositories\Attendance;

use App\Repositories\EloquentRepository;
use App\Repositories\Attendance\AttendanceRepositoryInterface;
use App\Models\Attendance;

class AttendanceRepository extends EloquentRepository implements AttendanceRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Attendance::class;
    }
}
