<?php

namespace App\Providers;

use App\Address;
use App\Repositories\AddressRepository;
use Illuminate\Support\ServiceProvider;

class AddressRepositoryServiceProvider extends ServiceProvider
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
        $this->app->singleton(AddressRepository::class, function() {
            return new AddressRepository(new Address);
        });
    }
}