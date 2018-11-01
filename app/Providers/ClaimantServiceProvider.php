<?php

namespace App\Providers;

use App\Service\Claimant;
use App\Service\Stripe;
use Illuminate\Support\ServiceProvider;

class ClaimantServiceProvider extends ServiceProvider
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
        $this->app->singleton(Claimant::class, function() {
            return new Stripe();
        });
    }
}