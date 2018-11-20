<?php

namespace App\Providers;

use App\Service\FeeCollector;
use Illuminate\Support\ServiceProvider;

class FeeCollectionServiceProvider extends ServiceProvider
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
        $this->app->bind(FeeCollector::class, function() {
            return new FeeCollector;
        });
    }
}