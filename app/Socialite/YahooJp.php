<?php

namespace App\Socialite;

use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;

class YahooJp extends AbstractProvider implements ProviderInterface
{

	protected $scopeSeparator = ' ';

	protected $scopes = [
		'openid',
		'profile',
		'email',
	];

	protected function getAuthUrl($state) {
		return $this->buildAuthUrlFromBase('https://auth.login.yahoo.co.jp/yconnect/v2/authorization', $state);
	}

	protected function getTokenUrl() {
		return 'https://auth.login.yahoo.co.jp/yconnect/v2/token';
	}

	public function getAccessTokenResponse($code) {
		$basic_auth_key = base64_encode($this->clientId.":".$this->clientSecret);

		$response = $this->getHttpClient()->post($this->getTokenUrl(), [
			'headers' => [
				'Authorization' => 'Basic '.$basic_auth_key,
			],
			'form_params' => [
				'grant_type' => 'authorization_code',
				'code' => $code,
				'redirect_uri' => $this->redirectUrl
			],
		]);

		return json_decode($response->getBody(),true);
	}

	protected function getUserByToken($token) {
		$response = $this->getHttpClient()->get('https://userinfo.yahooapis.jp/yconnect/v2/attribute', [
			'headers' => [
				'Authorization' => 'Bearer '.$token,
			],
		]);

		return json_decode($response->getBody(), true);
	}

	protected function mapUserToObject(array $user) {
		return (new User())->setRaw($user)->map([
			'id' => $user['sub'],
			'name' => $user['nickname'],
			'email' => $user['email'],
		]);
	}

	protected function parseAccessToken($body) {
		return json_decode($body, true);
	}

}