<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface RentSpaceBusinessTypeRepository.
 *
 * @package namespace App\Repositories;
 */
interface RentSpaceBusinessTypeRepository extends RepositoryInterface
{
    public function allIDsAndNames();
}