<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MyValidator;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app['validator']->resolver(function($translator, $data, $rules, $messages) {
        	return new MyValidator($translator, $data, $rules, $messages);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
