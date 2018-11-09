<?php

namespace App\Providers;

use App\Facility;
use App\Repositories\FacilityRepository;
use Illuminate\Support\ServiceProvider;

class FacilityRepositoryServiceProvider extends ServiceProvider
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
        $this->app->singleton(FacilityRepository::class, function() {
            return new FacilityRepository(new Facility);
        });
    }
}