<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface FacilityRepository.
 *
 * @package namespace App\Repositories;
 */
interface FacilityRepository extends RepositoryInterface
{
    public function new(array $data);
}