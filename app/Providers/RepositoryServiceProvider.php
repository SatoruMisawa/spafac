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
        $this->app->bind(\App\Repositories\PlanRepository::class, \App\Repositories\PlanRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ScheduleRepository::class, \App\Repositories\ScheduleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AddressRepository::class, \App\Repositories\AddressRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\FacilityRepository::class, \App\Repositories\FacilityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BankAccountRepository::class, \App\Repositories\BankAccountRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AmenityRepository::class, \App\Repositories\AmenityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SpaceAttachmentRepository::class, \App\Repositories\SpaceAttachmentRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MessageTemplateRepository::class, \App\Repositories\MessageTemplateRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\OptionRepository::class, \App\Repositories\OptionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PreorderPeriodRepository::class, \App\Repositories\PreorderPeriodRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PreorderDeadlineRepository::class, \App\Repositories\PreorderDeadlineRepositoryEloquent::class);
        //:end-bindings:
    }
}