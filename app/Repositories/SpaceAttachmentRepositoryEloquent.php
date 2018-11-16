<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SpaceAttachmentRepository;
use App\SpaceAttachment;
use App\Validators\SpaceAttachmentValidator;

/**
 * Class SpaceAttachmentRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SpaceAttachmentRepositoryEloquent extends BaseRepository implements SpaceAttachmentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SpaceAttachment::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}