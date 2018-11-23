<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ScheduleToStayRepository;
use App\ScheduleToStay;
use App\Validators\ScheduleToStayValidator;

/**
 * Class ScheduleToStayRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ScheduleToStayRepositoryEloquent extends BaseRepository implements ScheduleToStayRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ScheduleToStay::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}