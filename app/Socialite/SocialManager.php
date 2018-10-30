<?php

namespace App\Socialite;

use Laravel\Socialite\SocialiteManager;

class SocialManager extends SocialiteManager {

	protected function createYahooJpDriver() {		
		return $this->buildProvider(
			YahooJp::class, config('services.yahoojp')
		);
	}

}
