<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface PrefectureRepository.
 *
 * @package namespace App\Repositories;
 */
interface PrefectureRepository extends RepositoryInterface
{
    public function allIDsAndNames();
}