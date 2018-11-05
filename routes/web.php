<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/tester/login', 'TesterSessionController@new')->name('tester.session.new');
Route::post('/tester/login', 'TesterSessionController@create')->name('tester.session.create');

Route::group(['middleware' => 'tester'], function() {
	Route::get('/tester/logout', 'TesterSessionController@delete')->name('tester.session.delete');

	Route::get('/', function () {
		return view('welcome');
	 });
	 
	 //
	 //model
	 //
	 Route::model('institution', 'App\Institution');
	 Route::model('space', 'App\Space');
	 Route::model('media', 'App\Media');
	 Route::model('plan', 'App\Plan');
	 
	 //フロントページ
	 
	 //トップページ
	 Route::get('/', '\App\Http\Controllers\IndexController@index');
	 Route::get('inquiry', '\App\Http\Controllers\IndexController@inquiry');
	 Route::get('guide', '\App\Http\Controllers\IndexController@guide');
	 Route::get('terms-of-service', '\App\Http\Controllers\IndexController@termsOfService');
	 Route::get('recommendation', '\App\Http\Controllers\IndexController@recommendation');
	 Route::get('registration-contract', '\App\Http\Controllers\IndexController@registrationContract');
	 Route::get('company-profile', '\App\Http\Controllers\IndexController@companyProfile');
	 Route::get('privacy-policy', '\App\Http\Controllers\IndexController@privacyPolicy');
	 Route::get('commercial-transaction-law', '\App\Http\Controllers\IndexController@commercialTransactionLaw');
	 
	 //ログイン
	 Route::get('login', 'SessionController@new')->name('login');
	 Route::post('login', 'SessionController@create');
	 Route::get('logout', 'SessionController@delete')->name('logout');
	 Route::post('logout', 'SessionController@delete')->name('logout');
	 
	 // Login with social accounts
	 Route::get('login/{provider}', 'SessionController@redirectToProvider');
	 Route::get('login/{provider}/callback', 'SessionController@handleProviderCallback');
	 
	 Route::get('verification/{user}/email/{token}', 'EmailVerificationController@verify')->name('verification.email');
	 
	 //MOCK みさわ追加
	 Route::get('event_types', '\App\Http\Controllers\IndexController@event_types');//目的から探す
	 Route::get('areas', '\App\Http\Controllers\IndexController@areas');//エリアから探す
	 Route::get('capacities', '\App\Http\Controllers\IndexController@capacities');//収容人数から探す
	 Route::get('space_types', '\App\Http\Controllers\IndexController@space_types');//会場タイプから探す
	 Route::get('amenities', '\App\Http\Controllers\IndexController@amenities');//設備で探す
	 Route::get('category', '\App\Http\Controllers\IndexController@category');//カテゴリで探す
	 Route::get('keywords', '\App\Http\Controllers\IndexController@keywords');//キーワードで探す
	 Route::get('whats_about', '\App\Http\Controllers\IndexController@whats_about');//予約詳細
	 Route::get('request_done', '\App\Http\Controllers\IndexController@request_done');//予約完了
	 Route::get('request_chk', '\App\Http\Controllers\IndexController@request_chk');//予約確認
	 Route::get('stay', '\App\Http\Controllers\IndexController@stay');//宿泊・民泊
	 Route::get('stay/details', '\App\Http\Controllers\IndexController@stay_details');//宿泊・民泊詳細
	 //Route::get('party', '\App\Http\Controllers\IndexController@party');//パーティページ（つかわなくなった）
	 Route::get('purpose/{page?}', '\App\Http\Controllers\IndexController@purpose');//目的別ページ
	 Route::get('lodging_agreement', '\App\Http\Controllers\IndexController@lodging_agreement');//宿泊規約
	 Route::get('lodging_agreement_guests', '\App\Http\Controllers\IndexController@lodging_agreement_guests');//宿泊規約ゲスト
	 Route::get('flow_of_settlement', '\App\Http\Controllers\IndexController@flow_of_settlement');//決済の流れ
	 Route::get('mailmaga_done', '\App\Http\Controllers\IndexController@mailmaga_done');//メルマガ購読完了
	 Route::get('help/{page?}', '\App\Http\Controllers\IndexController@help');//目的別ページ
	 
	 
	 //新規会員登録
	 Route::get('users/new', 'UserController@new');
	 Route::post('users', 'UserController@create');
	 Route::get('registration/send', '\App\Http\Controllers\RegistrationController@send');
	 Route::get('registration/verify/{token}', '\App\Http\Controllers\RegistrationController@verify');
	 
	 //検索ページ
	 Route::get('search', '\App\Http\Controllers\SearchController@index');
	 Route::get('space/media/{media}/{width?}/{height?}/{fit?}', '\App\Http\Controllers\SpaceController@media');
	 
	 //物件ページ
	 Route::get('space/{space}', '\App\Http\Controllers\SpaceController@index');
	 
	 //Facebook Login
	 Route::get('facebook', 'FacebookController@facebookLogin');
	 Route::get('facebook/callback', 'FacebookController@facebookCallback');
	 
	 //Google Login
	 Route::get('google', 'GoogleController@googleLogin');
	 Route::get('google/callback', 'GoogleController@googleCallback');
	 
	 //Yahoo JP
	 Route::get('yahoojp', 'YahoojpController@yahoojpLogin');
	 Route::get('yahoojp/callback', 'YahoojpController@yahoojpCallback');
	 
	 //coming sool
	 Route::get('coming-soon', '\App\Http\Controllers\IndexController@comingSoon');
	 
	 
	 
	 //マイページ
	 Route::group(['prefix' => 'mypage'], function() {
		 
		 Route::group(['middleware' => 'auth'], function () {
			 Route::get('/', '\App\Http\Controllers\Mypage\IndexController@index');
			 Route::get('like', '\App\Http\Controllers\Mypage\IndexController@like');
			 Route::get('like-new', '\App\Http\Controllers\Mypage\IndexController@likeNew');
			 Route::get('login', '\App\Http\Controllers\Mypage\IndexController@login');
			 Route::get('management', '\App\Http\Controllers\Mypage\IndexController@management');
			 Route::get('pass', '\App\Http\Controllers\Mypage\IndexController@pass');
			 Route::get('profile', '\App\Http\Controllers\Mypage\ProfileController@index');
	 
			 //アカウント
			 Route::get('profile/edit-account', '\App\Http\Controllers\Mypage\ProfileController@editAccount');
			 Route::post('profile/edit-account', '\App\Http\Controllers\Mypage\ProfileController@confirmAccount');
	 
			 //連絡先
			 Route::get('profile/edit-contact', '\App\Http\Controllers\Mypage\ProfileController@editContact');
			 Route::post('profile/edit-contact', '\App\Http\Controllers\Mypage\ProfileController@confirmContact');
			 
			 //メールアドレス
			 Route::get('profile/edit-mail', '\App\Http\Controllers\Mypage\ProfileController@editMail');
			 Route::post('profile/edit-mail', '\App\Http\Controllers\Mypage\ProfileController@confirmMail');
			 
			 //パスワード
			 Route::get('profile/edit-password', '\App\Http\Controllers\Mypage\ProfileController@editPassword');
			 Route::post('profile/edit-password', '\App\Http\Controllers\Mypage\ProfileController@confirmPassword');
			 
			 Route::get('register', '\App\Http\Controllers\Mypage\IndexController@register');
			 Route::get('review', '\App\Http\Controllers\Mypage\IndexController@review');
			 Route::get('topics', '\App\Http\Controllers\Mypage\IndexController@topics');
	 
			 //-メール一覧
			 Route::get('mail-list', '\App\Http\Controllers\Mypage\IndexController@mailList');
			 
			 //アバター
			 Route::get('profile/avatar', '\App\Http\Controllers\Mypage\ProfileController@avatar');
		 });
		 
	 });
	 
	 //スペースオーナー向け画面
	 Route::group(['prefix' => 'host'], function() {
		 Route::group(['middleware' => 'auth'], function () {
		 
			 Route::get('/', 'Host\HostController@index')->name('host.index');
			 Route::get('/', '\App\Http\Controllers\Host\IndexController@index')->name('host');
			 
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
					 Route::get('/', 'Host\ImageController@index')->name('host.space.image.index');
					 Route::get('/new', 'Host\ImageController@new')->name('host.space.image.new');
					 Route::post('/', 'Host\ImageController@create')->name('host.space.image.create');
					 Route::get('/{image}', 'Host\ImageController@show')->name('host.space.image.show');
					 Route::put('/{image}', 'Host\ImageController@update')->name('host.space.image.update');
					 Route::delete('/{image}', 'Host\ImageController@delete')->name('host.space.image.delete');
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
		 });
	 });
	 
	 
	 //運営向け画面
	 Route::group(['prefix' => 'admin'], function() {
		 
		 
		 
		 
		 
	 });
	 
	 Route::get('home', 'HomeController@index')->name('home');	 
});
