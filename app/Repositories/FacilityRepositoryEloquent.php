<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\FacilityRepository;
use App\Facility;
use App\Validators\FacilityValidator;

/**
 * Class FacilityRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class FacilityRepositoryEloquent extends BaseRepository implements FacilityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Facility::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    public function new(array $data) {
        $model = $this->model();
        return new $model($data);
    }
}