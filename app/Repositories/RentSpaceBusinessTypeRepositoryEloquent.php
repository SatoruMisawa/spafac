<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\RentSpaceBusinessTypeRepository;
use App\RentSpaceBusinessType;
use App\Validators\RentSpaceBusinessTypeValidator;

/**
 * Class RentSpaceBusinessTypeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RentSpaceBusinessTypeRepositoryEloquent extends BaseRepository implements RentSpaceBusinessTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RentSpaceBusinessType::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    public function allIDsAndNames() {
        return $this->all()->mapWithKeys(function($businessType) {
            return [$businessType->id => $businessType->name];
        });
    }

}