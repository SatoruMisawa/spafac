<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SpaceImageRepository;
use App\SpaceImage;
use App\Validators\SpaceImageValidator;

/**
 * Class SpaceImageRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SpaceImageRepositoryEloquent extends BaseRepository implements SpaceImageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SpaceImage::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}