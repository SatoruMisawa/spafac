<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface PlanRepository.
 *
 * @package namespace App\Repositories;
 */
interface PlanRepository extends RepositoryInterface
{
    public function new(array $data);
}