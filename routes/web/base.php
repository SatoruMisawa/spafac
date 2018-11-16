<?php

/*
|--------------------------------------------------------------------------
| WebRoutes
|--------------------------------------------------------------------------
|
| Here is where you can register webRoutes for your application. These
|Routes are loaded by theRouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'guest:users'], function() {
	Route::get('users/new', 'UserController@new')->name('user.new');
	Route::post('users', 'UserController@create')->name('user.create');

	Route::get('login', 'SessionController@new')->name('login');
	Route::post('login', 'SessionController@create')->name('session.create');
	Route::get('login/{provider}', 'SessionController@redirectToProvider');
	Route::get('login/{provider}/callback', 'SessionController@handleProviderCallback');
});

Route::group(['middleware' => 'auth:users'], function() {
	Route::get('logout', 'SessionController@delete')->name('logout');
	Route::post('logout', 'SessionController@delete')->name('logout');

	Route::group(['prefix' => 'mypage'], function() {
		Route::get('/', 'Mypage\IndexController@index')->name('index');
		Route::get('like', 'Mypage\IndexController@like');
		Route::get('like-new', 'Mypage\IndexController@likeNew');
		Route::get('login', 'Mypage\IndexController@login');
		Route::get('management', 'Mypage\IndexController@management');
		Route::get('pass', 'Mypage\IndexController@pass');
		Route::get('profile', 'Mypage\ProfileController@index');
	 
		Route::get('profile/edit-account', 'Mypage\ProfileController@editAccount');
		Route::post('profile/edit-account', 'Mypage\ProfileController@confirmAccount');
	 
		Route::get('profile/edit-contact', 'Mypage\ProfileController@editContact');
		Route::post('profile/edit-contact', 'Mypage\ProfileController@confirmContact');
			 
		Route::get('profile/edit-mail', 'Mypage\ProfileController@editMail');
		Route::post('profile/edit-mail', 'Mypage\ProfileController@confirmMail');
			
		Route::get('profile/edit-password', 'Mypage\ProfileController@editPassword');
		Route::post('profile/edit-password', 'Mypage\ProfileController@confirmPassword');
			 
		Route::get('register', 'Mypage\IndexController@register');
		Route::get('review', 'Mypage\IndexController@review');
		Route::get('topics', 'Mypage\IndexController@topics');
	 
		Route::get('mail-list', 'Mypage\IndexController@mailList');
			 
		Route::get('profile/avatar', 'Mypage\ProfileController@avatar');
	});

	Route::group(['prefix' => 'host'], function() {
		Route::get('/', 'Host\HostController@index')->name('host.index');
			 
		Route::group(['prefix' => '/facilities'], function() {
			Route::get('/', 'Host\FacilityController@index')->name('host.facility.index');
			Route::get('/new', 'Host\FacilityController@new')->name('host.facility.new');
			Route::post('/', 'Host\FacilityController@create')->name('host.facility.create');
			Route::get('/{facility}', 'Host\FacilityController@edit')->name('host.facility.edit');
			Route::put('/{facility}', 'Host\FacilityController@update')->name('host.facility.update');
			Route::delete('/{facility}', 'Host\FacilityController@delete')->name('host.facility.delete');
	 
			Route::group(['prefix' => '/{facility}/spaces'], function() {
				Route::get('/new', 'Host\SpaceController@new')->name('host.facility.space.new');
				Route::post('/', 'Host\SpaceController@create')->name('host.facility.space.create');
				Route::get('/{space}', 'Host\SpaceController@edit')->name('host.facility.space.edit');
				Route::put('/{space}', 'Host\SpaceController@update')->name('host.facility.space.update');
				Route::delete('/{space}', 'Host\SpaceController@delete')->name('host.facility.space.delete');
			});
		});
	 
		Route::group(['prefix' => '/spaces'], function() {
			Route::get('/', 'Host\SpaceController@index')->name('host.space.index');
	 
			Route::group(['prefix' => '/{space}/images'], function() {
				Route::get('/', 'Host\SpaceAttachmentController@index')->name('host.space.image.index');
				Route::get('/new', 'Host\SpaceAttachmentController@new')->name('host.space.image.new');
				Route::post('/', 'Host\SpaceAttachmentController@create')->name('host.space.image.create');
				Route::get('/{image}', 'Host\SpaceAttachmentController@show')->name('host.space.image.show');
				Route::put('/{image}', 'Host\SpaceAttachmentController@update')->name('host.space.image.update');
				Route::delete('/{image}', 'Host\SpaceAttachmentController@delete')->name('host.space.image.delete');
			});
			
			Route::group(['prefix' => '/{space}/messagetemplate'], function() {
				Route::get('/new', 'Host\MessageTemplateController@new')->name('host.space.messagetemplate.new');
				Route::post('/', 'Host\MessageTemplateController@create')->name('host.space.messagetemplate.create');
			});

			Route::group(['prefix' => '/{space}/plan'], function() {
				Route::get('/', 'Host\PlanController@index')->name('host.space.plan.index');
				Route::get('/new', 'Host\PlanController@new')->name('host.space.plan.new');
				Route::post('/', 'Host\PlanController@create')->name('host.space.plan.create');
				Route::get('/{plan}', 'Host\PlanController@show')->name('host.space.plan.show');
				Route::put('/{plan}', 'Host\PlanController@update')->name('host.space.plan.update');
				Route::delete('/{plan}', 'Host\PlanController@delete')->name('host.space.plan.delete');
			});
		});

		Route::group(['prefix' => 'bankaccounts'], function() {
			Route::get('/new', 'Host\BankAccountController@new')->name('host.bankaccount.new');
			Route::post('/', 'Host\BankAccountController@create')->name('host.bankaccount.create');
		});
	});
});	 

Route::group(['prefix' => 'verification/{user}'], function() {
	Route::group(['prefix' => '/email'], function() {
		Route::get('/', 'EmailVerificationController@send')->name('verification.email.send');
		Route::get('/{token}', 'EmailVerificationController@verify')->name('verification.email.verify');
	});
});

Route::get('/', 'IndexController@index');
Route::get('inquiry', 'IndexController@inquiry');
Route::get('guide', 'IndexController@guide');
Route::get('terms-of-service', 'IndexController@termsOfService');
Route::get('recommendation', 'IndexController@recommendation');
Route::get('registration-contract', 'IndexController@registrationContract');
Route::get('company-profile', 'IndexController@companyProfile');
Route::get('privacy-policy', 'IndexController@privacyPolicy');
Route::get('commercial-transaction-law', 'IndexController@commercialTransactionLaw');
Route::get('event_types', 'IndexController@event_types');//目的から探す
Route::get('areas', 'IndexController@areas');//エリアから探す
Route::get('capacities', 'IndexController@capacities');//収容人数から探す
Route::get('space_types', 'IndexController@space_types');//会場タイプから探す
Route::get('amenities', 'IndexController@amenities');//設備で探す
Route::get('category', 'IndexController@category');//カテゴリで探す
Route::get('keywords', 'IndexController@keywords');//キーワードで探す
Route::get('whats_about', 'IndexController@whats_about');//予約詳細
Route::get('request_done', 'IndexController@request_done');//予約完了
Route::get('request_chk', 'IndexController@request_chk');//予約確認
Route::get('stay', 'IndexController@stay');//宿泊・民泊
Route::get('stay/details', 'IndexController@stay_details');//宿泊・民泊詳細
//Route::get('party', 'IndexController@party');//パーティページ（つかわなくなった）
Route::get('purpose/{page?}', 'IndexController@purpose');//目的別ページ
Route::get('lodging_agreement', 'IndexController@lodging_agreement');//宿泊規約
Route::get('lodging_agreement_guests', 'IndexController@lodging_agreement_guests');//宿泊規約ゲスト
Route::get('flow_of_settlement', 'IndexController@flow_of_settlement');//決済の流れ
Route::get('mailmaga_done', 'IndexController@mailmaga_done');//メルマガ購読完了
Route::get('help/{page?}', 'IndexController@help');//目的別ページ
 
Route::get('search', 'SearchController@index');
Route::get('space/media/{media}/{width?}/{height?}/{fit?}', 'SpaceController@media');
 
Route::get('space/{space}', 'SpaceController@index');
  
Route::get('coming-soon', 'IndexController@comingSoon');