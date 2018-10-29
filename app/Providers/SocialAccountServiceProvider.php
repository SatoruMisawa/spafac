<?php

namespace App\Providers;

use App\Service\SocialAccountService;
use Illuminate\Support\ServiceProvider;

class SocialAccountServiceProvider extends ServiceProvider
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
        $this->app->singleton(SocialAccountService::class, function() {
            return new SocialAccountService();
        });
    }
}
