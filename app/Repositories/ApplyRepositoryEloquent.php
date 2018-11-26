<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ApplyRepository;
use App\Apply;
use App\Validators\ApplyValidator;

/**
 * Class ApplyRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ApplyRepositoryEloquent extends BaseRepository implements ApplyRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Apply::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}