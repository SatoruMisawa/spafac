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
// this route is to test settlement
// and will be deleted soon
include 'test.php';

Route::group(['prefix' => '/spaces'], function() {
	Route::get('/{space}', 'SpaceController@show')->name('space.show');
});

Route::group(['middleware' => 'guest:users'], function() {
	Route::get('users/new', 'UserController@new')->name('user.new');
	Route::post('users', 'UserController@create')->name('user.create');

	Route::get('login', 'SessionController@new')->name('login');
	Route::post('login', 'SessionController@create')->name('session.create');
	Route::get('login/{provider}', 'SessionController@redirectToProvider')->name('session.provider.new');
	Route::get('login/{provider}/callback', 'SessionController@handleProviderCallback');
});

Route::group(['middleware' => 'auth:users'], function() {
	Route::get('logout', 'SessionController@delete')->name('logout');
	Route::post('logout', 'SessionController@delete')->name('logout');

Route::group([/*'middleware' => 'deny.all'*/], function() {
		Route::group(['prefix' => 'mypage', 'middleware' => 'deny.all'], function() {
			Route::get('/', 'Mypage\IndexController@index');
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
	
			//-メール一覧
			Route::get('mail-list', '\App\Http\Controllers\Mypage\IndexController@mailList')->name('maillist');
			Route::get('mail-table/{id}', '\App\Http\Controllers\Mypage\IndexController@mailtable')->name('mailtable');
			Route::post('mail-table/{id}', '\App\Http\Controllers\Mypage\IndexController@sendmail')->name('send_mail');
	
			Route::get('profile/avatar', 'Mypage\ProfileController@avatar');
		});
	
		Route::group(['prefix' => 'host'], function() {
			Route::get('/', 'Host\HostController@index')->name('host.index');
	
			// todo あとでちゃんとする
			Route::get('/new', function() {
				return view('selection');
			});
	
			Route::group(['prefix' => '/facilities'], function() {
				Route::get('/', 'Host\FacilityController@index')->name('host.facility.index');
				Route::get('/new', 'Host\FacilityController@new')->name('host.facility.new');
				Route::post('/', 'Host\FacilityController@create')->name('host.facility.create');
	
				Route::group(['middleware' => 'owner.facility'], function() {
					Route::get('/{facility}', 'Host\FacilityController@edit')->name('host.facility.edit');
					Route::put('/{facility}', 'Host\FacilityController@update')->name('host.facility.update');
					Route::delete('/{facility}', 'Host\FacilityController@delete')->name('host.facility.delete');
	
					Route::group(['prefix' => '/{facility}/spaces'], function() {
						Route::get('/new', 'Host\SpaceController@new')->name('host.facility.space.new');
						Route::post('/', 'Host\SpaceController@create')->name('host.facility.space.create');
						Route::get('/{space}', 'Host\SpaceController@edit')->name('host.facility.space.edit');
						Route::put('/{space}', 'Host\SpaceController@update')->name('host.facility.space.update');
						Route::delete('/{space}', 'Host\SpaceController@delete')->name('host.facility.space.delete');
	
						Route::group(['prefix' => '/stay'], function() {
							Route::get('/new', 'Host\SpaceController@newToStay')->name('host.facility.space.stay.new');
							Route::post('/', 'Host\SpaceController@createToStay')->name('host.facility.space.stay.create');
						});
					});
				});
			});
	
			Route::group(['prefix' => '/spaces'], function() {
				Route::get('/', 'Host\SpaceController@index')->name('host.space.index');
	
				Route::group(['prefix' => '/{space}', 'middleware' => 'owner.space'], function() {
					Route::group(['prefix' => '/images'], function() {
						Route::get('/', 'Host\SpaceAttachmentController@index')->name('host.space.attachment.index');
						Route::get('/new', 'Host\SpaceAttachmentController@new')->name('host.space.attachment.new');
						Route::post('/', 'Host\SpaceAttachmentController@create')->name('host.space.attachment.create');
						Route::get('/{image}', 'Host\SpaceAttachmentController@show')->name('host.space.attachment.show');
						Route::put('/{image}', 'Host\SpaceAttachmentController@update')->name('host.space.attachment.update');
						Route::delete('/{image}', 'Host\SpaceAttachmentController@delete')->name('host.space.attachment.delete');
					});
	
					Route::group(['prefix' => '/plans'], function() {
						Route::get('/', 'Host\PlanController@index')->name('host.space.plan.index');
						Route::get('/new', 'Host\PlanController@new')->name('host.space.plan.new');
						Route::post('/', 'Host\PlanController@create')->name('host.space.plan.create');
	
						Route::group(['prefix' => '/stay'], function() {
							Route::get('/new', 'Host\PlanController@newToStay')->name('host.space.plan.stay.new');
							Route::post('/', 'Host\PlanController@createToStay')->name('host.space.plan.stay.create');
						});
	
						Route::group(['prefix' => '/{plan}'], function() {
							Route::get('/', 'Host\PlanController@show')->name('host.space.plan.show');
							Route::put('/', 'Host\PlanController@update')->name('host.space.plan.update');
							Route::delete('/', 'Host\PlanController@delete')->name('host.space.plan.delete');
	
							Route::group(['prefix' => '/options'], function() {
								Route::get('/new', 'Host\OptionController@new')->name('host.space.plan.option.new');
								Route::post('/', 'Host\OptionController@create')->name('host.space.plan.option.create');
							});
						});
					});
	
					Route::group(['prefix' => '/messagetemplate'], function() {
						Route::get('/new', 'Host\MessageTemplateController@new')->name('host.space.messagetemplate.new');
						Route::post('/', 'Host\MessageTemplateController@create')->name('host.space.messagetemplate.create');
					});
				});
			});
	
			Route::group(['prefix' => 'bankaccounts'], function() {
				Route::get('/new', 'Host\BankAccountController@new')->name('host.bankaccount.new');
				Route::post('/', 'Host\BankAccountController@create')->name('host.bankaccount.create');
			});
		});
	});
});

Route::group(['prefix' => 'verification/{user}'], function() {
	Route::group(['prefix' => '/email'], function() {
		Route::get('/', 'EmailVerificationController@send')->name('verification.email.send');
		Route::get('/{token}', 'EmailVerificationController@verify')->name('verification.email.verify');
	});
});

Route::get('/', 'IndexController@index')->name('index');
Route::get('inquiry', 'IndexController@inquiry');
Route::get('guide', 'IndexController@guide');
// Route::get('terms-of-service', 'IndexController@termsOfService');
Route::get('recommendation', 'IndexController@recommendation');
Route::get('registration-contract', 'IndexController@registrationContract');
Route::get('company-profile', 'IndexController@companyProfile');
// Route::get('privacy-policy', 'IndexController@privacyPolicy');
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
Route::get('purpose/{page?}/{space_usage_id}', 'IndexController@purpose');//目的別ページ
Route::get('lodging_agreement', 'IndexController@lodging_agreement');//宿泊規約
Route::get('lodging_agreement_guests', 'IndexController@lodging_agreement_guests');//宿泊規約ゲスト
Route::get('flow_of_settlement', 'IndexController@flow_of_settlement');//決済の流れ
Route::get('mailmaga_done', 'IndexController@mailmaga_done');//メルマガ購読完了
Route::get('help/{page?}', 'IndexController@help');//目的別ページ


//検索
//Route::get('search', 'SearchController@index');
Route::get('search/{space_usage_id}', '\App\Http\Controllers\SearchController@spaceusageindex');
Route::get('search/{area}', '\App\Http\Controllers\SearchController@areasearchindex');
Route::get('search/amenities/{amenities}', '\App\Http\Controllers\SearchController@amenitiesindex');
Route::get('search/capacities/{capacities}', '\App\Http\Controllers\SearchController@capacitiesindex');
Route::get('search/facilities/{facilities}', '\App\Http\Controllers\SearchController@facility_kindsindex');
Route::get('search/', '\App\Http\Controllers\SearchController@searchindex');

Route::get('space/media/{media}/{width?}/{height?}/{fit?}', 'SpaceController@media');

Route::get('space/{space}', 'SpaceController@index');

Route::get('coming-soon', 'IndexController@comingSoon');