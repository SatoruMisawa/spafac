<?php

namespace App\Providers;

use App\Service\ImageStorage;
use Illuminate\Support\ServiceProvider;

class ImageStorageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ImageStorage::class, function() {
            return new ImageStorage; 
        });
    }
}