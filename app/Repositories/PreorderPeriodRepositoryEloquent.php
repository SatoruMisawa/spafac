<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PreorderPeriodRepository;
use App\PreorderPeriod;
use App\Validators\PreorderPeriodValidator;

/**
 * Class PreorderPeriodRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PreorderPeriodRepositoryEloquent extends BaseRepository implements PreorderPeriodRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PreorderPeriod::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    public function allNames() {
        return $this->all()->map(function($period) {
            return $period->name;
        });
    }

}