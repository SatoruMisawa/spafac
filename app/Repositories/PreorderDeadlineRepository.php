<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface PreorderDeadlineRepository.
 *
 * @package namespace App\Repositories;
 */
interface PreorderDeadlineRepository extends RepositoryInterface
{
    public function allNames();
}