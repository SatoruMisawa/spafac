<?php

namespace App\Repositories;

use App\Space;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SpaceRepository;
use App\Validators\SpaceValidator;

/**
 * Class SpaceRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SpaceRepositoryEloquent extends BaseRepository implements SpaceRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Space::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}