<?php

namespace App\Facades;

use App\Service\ImageStorage as Service;
use Illuminate\Support\Facades\Facade;

class ImageStorage extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Service::class;
    }
}