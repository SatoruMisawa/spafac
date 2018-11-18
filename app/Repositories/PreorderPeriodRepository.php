<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface PreorderPeriodRepository.
 *
 * @package namespace App\Repositories;
 */
interface PreorderPeriodRepository extends RepositoryInterface
{
    public function allNames();
}