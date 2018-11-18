<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\KeyDeliveryRepository;
use App\KeyDelivery;
use App\Validators\KeyDeliveryValidator;

/**
 * Class KeyDeliveryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class KeyDeliveryRepositoryEloquent extends BaseRepository implements KeyDeliveryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return KeyDelivery::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}