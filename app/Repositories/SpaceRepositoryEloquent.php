<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SpaceRepository;
use App\Space;
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
    
    public function new(array $data) {
        $model = $this->model();
        return new $model($data);
    }

}