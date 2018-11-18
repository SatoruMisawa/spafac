<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PrefectureRepository;
use App\Prefecture;
use App\Validators\PrefectureValidator;

/**
 * Class PrefectureRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PrefectureRepositoryEloquent extends BaseRepository implements PrefectureRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Prefecture::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    public function allIDsAndNames() {
        return $this->all()->mapWithKeys(function($prefecture) {
            return [$prefecture->id => $prefecture->name];
        });
    }
}