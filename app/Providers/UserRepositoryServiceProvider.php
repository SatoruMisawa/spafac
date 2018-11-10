<?php

namespace App\Providers;

use App\User;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserRepositoryServiceProvider extends ServiceProvider
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
        $this->app->singleton(UserRepository::class, function() {
            return new UserRepository(new User);
        });
    }
}