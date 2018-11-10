<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\SpaceRepository::class, \App\Repositories\SpaceRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SpaceImageRepository::class, \App\Repositories\SpaceImageRepositoryEloquent::class);
        //:end-bindings:
    }
}
