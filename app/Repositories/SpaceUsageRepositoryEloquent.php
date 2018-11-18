<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SpaceUsageRepository;
use App\SpaceUsage;
use App\Validators\SpaceUsageValidator;

/**
 * Class SpaceUsageRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SpaceUsageRepositoryEloquent extends BaseRepository implements SpaceUsageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SpaceUsage::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}