<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\FacilityKindRepository;
use App\FacilityKind;
use App\Validators\FacilityKindValidator;

/**
 * Class FacilityKindRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class FacilityKindRepositoryEloquent extends BaseRepository implements FacilityKindRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return FacilityKind::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}