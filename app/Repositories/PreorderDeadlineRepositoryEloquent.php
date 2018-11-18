<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PreorderDeadlineRepository;
use App\PreorderDeadline;
use App\Validators\PreorderDeadlineValidator;

/**
 * Class PreorderDeadlineRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PreorderDeadlineRepositoryEloquent extends BaseRepository implements PreorderDeadlineRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PreorderDeadline::class;
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