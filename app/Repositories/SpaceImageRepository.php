<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface SpaceImageRepository.
 *
 * @package namespace App\Repositories;
 */
interface SpaceImageRepository extends RepositoryInterface
{
    public function new(array $data);
}