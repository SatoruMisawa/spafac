<?php

namespace App\Providers;

use App\Socialite\SocialManager;
use Laravel\Socialite\Contracts\Factory;
use Laravel\Socialite\SocialiteServiceProvider as Original;

class SocialiteServiceProvider extends Original
{
	public function register() {
		$this->app->singleton(Factory::class,function($app){
			return new SocialManager($app);
		});
	}
}