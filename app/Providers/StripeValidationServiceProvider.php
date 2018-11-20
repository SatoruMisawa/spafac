<?php

namespace App\Providers;

use App\Service\StripeValidator;
use Illuminate\Support\ServiceProvider;

class StripeValidationServiceProvider extends ServiceProvider
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
        $this->app->singleton(StripeValidator::class, function() {
            return new StripeValidator;
        });
    }
}