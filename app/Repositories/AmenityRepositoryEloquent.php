<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AmenityRepository;
use App\Amenity;
use App\Validators\AmenityValidator;

/**
 * Class AmenityRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AmenityRepositoryEloquent extends BaseRepository implements AmenityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Amenity::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}