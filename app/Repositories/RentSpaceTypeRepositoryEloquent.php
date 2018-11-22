<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\RentSpaceTypeRepository;
use App\RentSpaceType;
use App\Validators\RentSpaceTypeValidator;

/**
 * Class RentSpaceTypeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RentSpaceTypeRepositoryEloquent extends BaseRepository implements RentSpaceTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RentSpaceType::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}