@extends('mypage.layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/top.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div id="search_box">
	<div class="search_box_inner search_width">
		<p class="search_box_p">目的にあった空間・スペースの簡単登録検索予約サイトへようこそ</p>

		@include('mid-nav')

	</div>
</div>
<div class="search_button gray">
	<div class="search_width">

		<ul>
			<li><a class="" href="<?php echo url('areas'); ?>">エリアから探す</a></li>
			<li><a href="<?php echo url('capacities'); ?>">収容人数から探す</a></li>
			<li><a href="<?php echo url('keywords'); ?>">カテゴリーから探す</a></li>
			<li><a href="<?php echo url('amenities'); ?>">設備から探す</a></li>
		</ul>
	</div>
</div>
<div class="gray" id="search_box_2">
	<div class="wrap">
		<div class="category_box">
			<div class="category_box_menu">
				<div class="category_box_title">
					<h3>目的から探す</h3>
					<!--<p><span>861,192件数 |</span><span>21,710,603口コミ</span></p>-->
				</div>
				<div class="category_box_wrap">
					<div class="category_box_icon">
						<a href="/purpose/sales/1">
							<img src="<?php echo url('assets/mypage/img/cat-00.png'); ?>" alt="">
							<div class="cat_text">
								<p>物販・POP Up Store</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
					<div class="category_box_icon">
						<a href="/purpose/party/2">
							<img src="<?php echo url('assets/mypage/img/cat-1.png'); ?>" alt="">
							<div class="cat_text">
								<p>飲食・パーティ</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
					<div class="category_box_icon">
						<a href="/purpose/exhibition/3">
							<img src="<?php echo url('assets/mypage/img/cat-2.png'); ?>" alt="">
							<div class="cat_text">
								<p>催事・展示会</p>
								<span>(件)</span>
							</div>
						</a>
					</div>

					<div class="category_box_icon">
						<a href="/purpose/event/4">
							<img src="<?php echo url('assets/mypage/img/cat-4.png'); ?>" alt="">
							<div class="cat_text">
								<p>イベントプロモーション・広告</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
					<div class="category_box_icon">
						<a href="/purpose/meeting/5">
							<img src="<?php echo url('assets/mypage/img/cat-5.png'); ?>" alt="">
							<div class="cat_text">
								<p>オフィス・会議</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
					<div class="category_box_icon">
						<a href="/purpose/meeting/4">
							<img src="<?php echo url('assets/mypage/img/cat-6.png'); ?>" alt="">
							<div class="cat_text">
								<p>宿泊・民泊</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
					<div class="category_box_icon">
						<a href="/purpose/wedding/5">
							<img src="<?php echo url('assets/mypage/img/cat-7.png'); ?>" alt="">
							<div class="cat_text">
								<p>結婚式・お祝いシーン</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
					<div class="category_box_icon">
						<a href="/purpose/performance/6">
							<img src="<?php echo url('assets/mypage/img/cat-80.png'); ?>" alt="">
							<div class="cat_text">
								<p>演奏</p>
								<span>(件)</span>
							</div>
						</a>
					</div>

					<div class="category_box_icon">
						<a href="/purpose/location/7">
							<img src="<?php echo url('assets/mypage/img/cat-8.png'); ?>" alt="">
							<div class="cat_text">
								<p>ロケ撮影･写真･動画</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
					<div class="category_box_icon">
						<a href="/purpose/parking/8">
							<img src="<?php echo url('assets/mypage/img/cat-7_bk.png'); ?>" alt="">
							<div class="cat_text">
								<p>駐車場・空き地・倉庫</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
					<div class="category_box_icon">
						<a href="/purpose/sports/9">
							<img src="<?php echo url('assets/mypage/img/cat-10.png'); ?>" alt="">
							<div class="cat_text">
								<p>スポーツ・ボディメイク</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
					<div class="category_box_icon">
						<a href="/purpose/other/10">
							<img src="<?php echo url('assets/mypage/img/cat-9.png'); ?>" alt="">
							<div class="cat_text">
								<p>その他</p>
								<span>(件)</span>
							</div>
						</a>
					</div>
				</div>
				<div class="category_text clear" id="category_text">
					<div class="category_box_title">
						<h3>カテゴリーから探す</h3>
					</div>
					<div class="category_text_menu">
						<ul>

							<li><a href="{{ action('SearchController@facility_kindsindex', '1' ) }}">イベント</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '2' ) }}">結婚式場</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '3' ) }}">オフィス</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '4' ) }}">ホール</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '5' ) }}">貸し会議室</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '6' ) }}">スタジオ</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '7' ) }}">カフェ</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '8' ) }}">レストラン</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '9' ) }}">映画館</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '10' ) }}">ギャラリー</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '11' ) }}">バー</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '12' ) }}">スポーツ施設</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '13' ) }}">娯楽施設</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '14' ) }}">ホテル</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '15' ) }}">住宅</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '16' ) }}">倉庫</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '17' ) }}">ワイナリ・蔵</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '18' ) }}">百貨店</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '19' ) }}">オフィス街</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '20' ) }}">商店街アーケード</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '21' ) }}">ロードサイド</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '22' ) }}">駅近　ロータリー</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '23' ) }}">軒先き</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '24' ) }}">移動販売車設置</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '25' ) }}">駅地下</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '26' ) }}">一戸建て</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '27' ) }}">テラス</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '28' ) }}">看板</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '29' ) }}">掲示スペース</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '30' ) }}">駐車場</a></li>
							<li><a href="{{ action('SearchController@facility_kindsindex', '31' ) }}">その他</a></li>


						</ul>

					</div>
				</div>
			</div>
			<div class="login_wrap">
				<div class="login_title"><img src="<?php echo url('assets/mypage/img/icon-02.png'); ?>" alt=""><span>メンバーログイン</span></div>
				<div class="login_box">
					@if (Auth::guard('users')->check())
					<div class="avatar"><img src="" alt=""><spa>　メンバーログイン中</span></div>
						<div class="login_form">
					<ul class="login_chu">
						<li><a href="<?php echo url('host'); ?>">スペースをお持ちの方</a></li>
						<li><a href="<?php echo url('mypage'); ?>" onclick="window.open(this.href, 'mypage', 'width=1100, height=640, menubar=no, toolbar=no, scrollbars=yes'); return false;">マイページ</a></li>
						<li><a href="<?php echo url('logout'); ?>">ログアウト</a></li>
					</ul>
					@else
					<div class="login_form">


						<form  method="POST" action="{{ route('session.create')}}">
						<table>
							<tr>
								<td>ユーザーID:</td>
								<td>
									<input type="text" name="email" value="">
								</td>
							</tr>
							<tr>
								<td>パスワード:</td>
								<td>
									<input type="password" name="password" value="">
								</td>
							</tr>
						</table>
						<a class="forget" href="">ユーザーIDやパスワードをお忘れの場合はこちら &gt;</a>
						<div class="login_button">
							<button type="submit">ログイン</button>
						</div>
						@include('mypage.layouts.message', array('errors' => $errors))
					</form>
						<div class="sns_login">
							<ul>
								<li class="fb"><a href="/login/facebook"><img src="/assets/common/img/icon_fb.png"><span>Facebookでログイン</span></a></li>
								<li class="ya"><a href="/login/yahoojp"><img src="/assets/common/img/icon_yahoo.png"><span>Yahoo!でログイン</span></a></li>
								<li class="gg"><a href="/login/google"><img src="/assets/common/img/icon_google.png"><span>Googleでログイン</span></a></li>
							</ul>
							<p>ログイン以外の目的に使われることはありません。スペースファクトリーがゲストの同意なしに投稿することはありません。</p>
						</div>
						<div class="register">
							<p>無料登録してお今すぐ検索する</p>
							<a href="{{ route('user.new') }}">新規登録</a>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

<section class="white pattern_1" id="staff">
	<div class="pattern_title">
		<h2>スタッフのイチオシスペース</h2>
		<span>Staff Recommended</span>
	</div>
	<div class="pattern_box">
    <div class="pac">

	<div class="col-xs-4 col-lg-4 staff-box">
		<div class="staff-linkbox">
			<div class="staff-top-area unit-st">
			<img  class="staffichioshi000" src="<?php echo url('assets/mypage/img/image_photo/sampleimage91.png'); ?>" alt="" class="sp-top-ranking__image-pict">
			<h3 class="staff-title" style="background-color: #fa8b9f;">
				<span class="star">★★★★☆</span><br>
				<span>白を基調としたスタイリッシュでオシャレな空間は物件の室内に大きなキッチンは使い勝手も便利でお料理教室や、お菓子などのワークシ…</span>
			</h3>
			</div>
		</div>
	</div>
	<div class="col-xs-4 col-lg-4 staff-box">
		<div class="staff-linkbox">
			<div class="staff-top-area unit-st">
			<img  class="staffichioshi000" src="<?php echo url('assets/mypage/img/image_photo/sampleimage90.png'); ?>" alt="" class="sp-top-ranking__image-pict">
			<h3 class="staff-title" style="background-color: #fa8b9f;">
				<span class="star">★★★★☆</span><br>
				<span>結婚式場のテラスを使って女子会を行いました。オシャレなアンティーク調の雰囲気の中で友人のサプライズ誕生日を行い、本人もとって…</span>
			</h3>
			</div>
		</div>
	</div>
	<div class="col-xs-4 col-lg-4 staff-box">
		<div class="staff-linkbox">
			<div class="staff-top-area unit-st">
			<img  class="staffichioshi000" src="<?php echo url('assets/mypage/img/image_photo/sampleimage92.png'); ?>" alt="">
			<h3 class="staff-title" style="background-color: #fa8b9f;">
				<span class="star">★★★★★</span><br>
				<span>結婚式場のチャペルで大切な人からサプライズでプロポーズされました。ほんの少しの時間でこんな大きな幸せを一生の宝物にしたいと思…</span>
			</h3>
			</div>
		</div>
	</div>
	</div>
	</div>
	<a class="detail" href="/recommendation">スタッフのイチオシスペース &raquo;</a>
</section>

<section class="white" id="news">
	<h2>Topics &amp; News</h2>
		<ul class="news">
			<div class="case_study_wrap">
				<li>
					<span>2018.07.05</span>
					<a href="https://magazine.spafac.com/2018/09/20/missjapan2018//">ミスコスモポリタン・ジャパン2018年度日本代表決定</a>
					<span>2018.07.05</span>
					<a href="https://magazine.spafac.com/2018/09/20/restaurant-request//">レストラン・飲食店をお持ちの方スペースファクトリーに無料登録しませんか？</a>
					<span>2018.07.05</span>
                    <a href=" https://magazine.spafac.com/2018/08/29/rinenna3/ ">臭い匂いをごっそり落とす消臭スプレー＃３</a>
				</li>
			</div>
		</ul>
			<div class="news_card">
				<ul>
					<li>
						<a href="http://spafac.sa-m.net/wp/news/news02/">
						<div class="img">
							<img src="{{ asset('assets/mypage/img/campfire_logo.png') }}" alt="">
						</div>
						</a>
						<div class="text">
							<span class="date">2018.07.19</span>
							<p class="bold">12月末までのスペース登録弊社代行無料キャンペーン実施中！</p>
							<p>いよいよ始まる、地域密着の空間シェアリングサービス。遊休空間や空いているスペ…</p>
							<a class="readmore" href="https://magazine.spafac.com/2018/10/17/spaceentryservice/">続きを読む</a>
						</div>
					</li>
					<li>
						<a href="http://spafac.sa-m.net/wp/news/news02/">
							<div class="img">
								<img src="{{ asset('assets/mypage/img/goto2025logo.jpg') }}" alt="">
							</div>
						</a>
							<div class="text">
								<span class="date">2018.07.19</span>
								<p class="bold">2025年万博誘致プロジェクト！「Spacefactory×Campfire コラボ企画」</p>
								<p>大阪の街を活性化したい。大阪を盛り上げたい.大阪万博誘致プロジェウト「ダイヤ…</p>
								<a class="readmore" "https://magazine.spafac.com/2018/09/15/spafac-campfire/">続きを読む</a>
							</div>
					</li>
					<li>
						<a href="http://spafac.sa-m.net/wp/news/18070501/">
							<div class="img">
								<img src="{{ asset('assets/mypage/img/osakadowntown_logo.png') }}" alt="">
							</div>
						</a>
						<div class="text">
							<span class="date">2018.09.25</span>
							<p class="bold">大阪観光局の会へ参加</p>
							<p>関西地域の活性化　空間活用を行う事で様々なライフスタイルやワークスタイルに変化を…</p>
							<a class="readmore" href=" https://magazine.spafac.com/2018/09/15/osakacity-info//">続きを読む</a>
						</div>
					</li>
				</ul>
			</div>
	<div class="wrap txtR">
		<a class="archive_link" href="https://magazine.spafac.com/category/ニュース/">News一覧を見る »</a>
	</div>
</section>



<section class="gray" id="welcome">
	<div class="welcome_title">
		<h2>関西エリアを地域密着でサポートいたします。<br>
			様々なスペースで「ワクワク」「ドキドキ」を体験　個人様でも法人様でもご利用できる<br>
			空間・スペースシェアリング検索・予約サイトへようこそ</h2>
		<p>スペースの貸し借りで社会貢献ができる。<br>スペースを貸す方、借りる方をワンストップ + αの付加価値をつけてお繋ぎ致します。<br>業界でもお得な手数料と豊富なスペースラインナップでフルサポート致します。</p>
	</div>
	<div class="welcome_figure_1">
		<div class="figure_box">
			<h3>目的にあった<br>スペースが見つかる</h3>
			<p>誰でも一日からお店がもてたり、短時間から駐車場のスペースとしてかりれたり、会議室での会議やイベントスペースでの習い事や販売など。<br>その軒先や各スペースオーナーさんとのコラボレーションもできます。<br>思いついたら今すぐ初めてみよう。</p>
		</div>
		<div class="figure_arrow"><img src="<?php echo url('assets/mypage/img/icon-11.png'); ?>" alt=""></div>
		<div class="figure_box">
			<h3>空きスペースを<br>有効活用</h3>
			<p>ほんの一坪の土地や店先など、カフェのインテリアに絵画スペース、<br>大小問わずに余っているオーナー様のスペースを貸し出してみませんか？<br>あなたのスペースが未来を見据える夢のステップに。提供の仕方が分からない時は今すぐお問い合わせください！スタッフ一同全力でサポートいたします！</p>
		</div>
	</div>
	<div class="welcome_title">
		<h2>ビジネスの3つの特徴</h2>
	</div>
	<div class="welcome_figure_2">
		<div class="pac">
			<div class="figure_box_2">
				<span class="icon"><img src="<?php echo url('assets/mypage/img/icon-12.png'); ?>" alt=""></span>
				<h4>いつでも誰でも<br>カンタン登録</h4>
				<p>パソコンやスマホで利用できるクラウド型サービス。思いついたらすぐに登録してみよう。登録料・掲載料はもちろん無料です。スペースのレンタスが始まるまで費用はかかりません。<br><br>弊社手数料は業界水準を下回る良心的なプランでお届け致します。</p>
			</div>
			<div class="figure_box_2">
				<span class="icon"><img src="<?php echo url('assets/mypage/img/icon-13.png'); ?>" alt=""></span>
				<h4>関西地域密着型でコアな<br>スペースまで検索可能です</h4>
				<p>関西地域に密着した理由は私たちスタッフが数十年培ったスタッフの経験値を最高のパフォーマンスで提供したいという希望。<br><br>不動産業界・飲食業界・物販担当者から様々な情報産業の経験等を活かしスタッフ全員でフルサポートいたします。<br>もちろんその他地域もお問い合わせください。</p>
			</div>
			<div class="figure_box_2">
				<span class="icon"><img src="<?php echo url('assets/mypage/img/icon-14.png'); ?>" alt=""></span>
				<h4>契約金等初期費用は不要。<br>スペース使用料のみでコスト削減</h4>
				<p>何かにチャレンジする際にスペースの契約として敷金・礼金など契約金がかかるとどうしても初期費用がかかるもの。<br><br>意外とあれこれ費用はかかるものです。場所を借りる契約金は単価も高く悩みがちになるものです。　当サイトでは１時間から１日から借りれる様、コスト削減を実現いたしました。</p>
			</div>
		</div>
	</div>
</section>
<section class="white" id="flow">
	<h2 class="flow_title">ご利用までの流れ</h2>
	<div class="flow">
		<div class="flow_box">
			<img src="<?php echo url('assets/mypage/img/icon-15.png'); ?>" alt=""><span>会員登録</span>
			<p>お持ちのパソコンやスマートフォンで無料会員登録からフォームに入力し送信するだけ。会員登録後本人確認資料とその他出店に必要な書類を提出。審査承認後ご予約が可能となります。<br>会員様限定のプレミアム特典もご利用頂けます。</p>
		</div>
		<div class="flow_arrow"><img src="<?php echo url('assets/mypage/img/icon-19.png'); ?>" alt=""></div>
		<div class="flow_box">
			<img src="<?php echo url('assets/mypage/img/icon-17.png'); ?>" alt=""><span>予約</span>
			<p>会員登録後、予約が可能となります。借りたいスペースを選んでカレンダー機能より日時を登録してスペースの利用申請を行います。</p>
		</div>
		<div class="flow_arrow"><img src="<?php echo url('assets/mypage/img/icon-19.png'); ?>" alt=""></div>
		<div class="flow_box">
			<img src="<?php echo url('assets/mypage/img/icon-18.png'); ?>" alt=""><span>支払</span>
			<p>スペースオーナー様からスペース利用承認を頂きクレジットまたは銀行振込にて決済。ご希望日よりご利用いただけます。</p>
		</div>
		<div class="flow_arrow"><img src="<?php echo url('assets/mypage/img/icon-19.png'); ?>" alt=""></div>
		<div class="flow_box">
			<img src="<?php echo url('assets/mypage/img/icon-16.png'); ?>" alt=""><span>当日</span>
			<p>さぁ　あなたの夢の始まりです。おもいっきり活用してみてください。</p>
		</div>
	</div>
</section>
<section id="reg_now">
	<div id="reg_now_box">
		<h2>今すぐ会員登録して</h2>
		<span>スペースを貸し借りしてみよう</span>
		<p>12月末までの先行会員様無料登録キャンペーン実施中。<br>スペースレンタル成約時の手数料が12月末まで無料!</p>
		<a href="{{ route('user.new') }}">新規登録（無料）</a>
	</div>
</section>

<section class="gray pattern_1" id="campaign">
	<div class="pattern_title">
		<h2>開催中のキャンペーン</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			<div class="col-4 col-md-4 staff-box">
					<div class="staff-linkbox">
						<div class="staff-top-area unit-st">
							<img src="<?php echo url('assets/mypage/img/image_photo/sampleimage130.jpg'); ?>" alt="">
							<h3 class="staff-title" style="background-color: #fa8b9f;">
							<span>12月末までのスペース登録弊社代行無料キャンペーン実施中！スペースを借りる方必見！スペースレンタル成約時の手数料が12月末まで無料！</span>
							</h3>
						</div>
					</div>
			</div>
			<div class="col-4 col-md-4 staff-box">
					<div class="staff-linkbox">
						<div class="staff-top-area unit-st">
							<img src="<?php echo url('assets/mypage/img/image_photo/sampleimage131.jpg'); ?>" alt="">
							<h3 class="staff-title" style="background-color: #fa8b9f;">
							<span>Campfire×SPACE FACTORY 大阪心斎橋近くの多目的ルームをいち早くお届け！ただいまキャンペーン中につきレンタル料金期間限定大幅割引！</span>
							</h3>
						</div>
					</div>
			</div>
			<div class="col-4 col-md-4 staff-box">
					<div class="staff-linkbox">
						<div class="staff-top-area unit-st">
							<img src="<?php echo url('assets/mypage/img/image_photo/sampleimage132.jpg'); ?>" alt="">
							<h3 class="staff-title" style="background-color: #fa8b9f;">
							<span>スペースをお持ちの方。只今利用用途の拡大中につきご紹介キャンペーン実施中！スペースをお持ちの方をご紹介のご紹介で素敵な特典をゲット！</span>
							</h3>
						</div>
					</div>
			</div>
			</div>
		</div>
	</div>
	<a class="detail" href="/campaign">その他のキャンペーンをもっと見る &raquo;</a>
</section>

<section id="reg_now_2">
	<div class="reg_now_2_title">
		<h2>今すぐ会員登録して、スペースを貸し借りしてみよう</h2>
		<span></span>
	</div>
	<div class="reg_now_2_button"><a href="{{ route('user.new') }}">新規登録（無料）</a></div>
</section>

<section class="gray pattern_1" id="parking">
	<div class="pattern_title">
		<h2>物販・POP Up Store</h2>
	</div>

	<div class="pattern_box">
    <div class="pac">
				<div class="row">
		@foreach($query[1] as $data)

		<div class="col-4 col-md-4">

			<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
			<div class="sp-top-rakinbox sp-topbox-area">
				<div class="sp-top-rakinbox__image">
						<img src="{{$data->url}}" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
						<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
						<span class="sp-top-ranking__price-icon">
							<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
							<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
							<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
						</span>
						</p>
				</div>

					<div class="sp-top-ranking__body">
						<div class="sp-top-ranking__body-inner">
							<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
						</div>
						<ul class="sp-top-ranking__body-info">
							<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
							<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
						</ul>
					</div>

			</div>
			</a>
					<h3 class="staff-title" style="background-color: #4abfe6;">
					<span class="star">★★★★★</span><br/>
					<span>{{$data->about}}</span>
					</h3>
		</div>

		@endforeach
		</div>
	</div>
	</div>
	<a class="detail" href="/purpose/sales/1">物販で利用できるスペースをもっと見る &raquo;</a>
</section>

<section class="gray pattern_1" id="party">
	<div class="pattern_title">
		<h2>飲食・パーティ</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			@foreach($query[2] as $data)
			<div class="col-4 col-md-4">

				<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
				<div class="sp-top-rakinbox sp-topbox-area">
					<div class="sp-top-rakinbox__image">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
							<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
							<span class="sp-top-ranking__price-icon">
								<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
								<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
								<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
							</span>
							</p>
					</div>

						<div class="sp-top-ranking__body">
							<div class="sp-top-ranking__body-inner">
								<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
							</div>
							<ul class="sp-top-ranking__body-info">
								<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
								<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
							</ul>
						</div>

				</div>
				</a>
						<h3 class="staff-title" style="background-color: #4abfe6;">
						<span class="star">★★★★★</span><br/>
						<span>{{$data->about}}</span>
						</h3>
			</div>

			@endforeach
		</div>
		</div>
	</div>
	<a class="detail" href="/purpose/party/2">飲食・パーティで利用できるスペースをもっと見る &raquo;</a>
</section>

<section class="gray pattern_1" id="parking">
	<div class="pattern_title">
		<h2>オフィス・会議</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			@foreach($query[5] as $data)
			<div class="col-4 col-md-4">

				<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
				<div class="sp-top-rakinbox sp-topbox-area">
					<div class="sp-top-rakinbox__image">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
							<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
							<span class="sp-top-ranking__price-icon">
								<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
								<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
								<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
							</span>
							</p>
					</div>

						<div class="sp-top-ranking__body">
							<div class="sp-top-ranking__body-inner">
								<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
							</div>
							<ul class="sp-top-ranking__body-info">
								<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
								<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
							</ul>
						</div>

				</div>
				</a>
						<h3 class="staff-title" style="background-color: #4abfe6;">
						<span class="star">★★★★★</span><br/>
						<span>{{$data->about}}</span>
						</h3>
			</div>

			@endforeach
		</div>
		</div>
	</div>
	<a class="detail" href="/purpose/office/5">オフィス・会議で利用できるスペースをもっと見る &raquo;</a>
</section>

<section id="reg_now_3">
	<div class="reg_now_3_title">
		<h2>あなたもスペースオーナーになってみませんか</h2>
		<span>お持ちのスペースを今すぐ有効活用。あらゆるスペースが登録可能です</span>
	</div>
	<div class="reg_now_3_button"><a href="{{ route('user.new') }}">無料登録をしてすぐスペースオーナーになる</a></div>
</section>

<section class="gray pattern_1" id="parking">
	<div class="pattern_title">
		<h2>イベントプロモーション・広告</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			@foreach($query[4] as $data)
			<div class="col-4 col-md-4">

				<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
				<div class="sp-top-rakinbox sp-topbox-area">
					<div class="sp-top-rakinbox__image">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
							<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
							<span class="sp-top-ranking__price-icon">
								<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
								<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
								<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
							</span>
							</p>
					</div>

						<div class="sp-top-ranking__body">
							<div class="sp-top-ranking__body-inner">
								<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
							</div>
							<ul class="sp-top-ranking__body-info">
								<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
								<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
							</ul>
						</div>

				</div>
				</a>
						<h3 class="staff-title" style="background-color: #4abfe6;">
						<span class="star">★★★★★</span><br/>
						<span>{{$data->about}}</span>
						</h3>
			</div>


			@endforeach
		</div>
		</div>
	</div>
	<a class="detail" href="/purpose/event/4">イベントプロモーション・広告で利用できるスペースをもっと見る &raquo;</a>
</section>

<section class="gray pattern_1" id="parking">
	<div class="pattern_title">
		<h2>催事・展示会</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			@foreach($query[3] as $data)
			<div class="col-4 col-md-4">

				<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
				<div class="sp-top-rakinbox sp-topbox-area">
					<div class="sp-top-rakinbox__image">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
							<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
							<span class="sp-top-ranking__price-icon">
								<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
								<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
								<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
							</span>
							</p>
					</div>

						<div class="sp-top-ranking__body">
							<div class="sp-top-ranking__body-inner">
								<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
							</div>
							<ul class="sp-top-ranking__body-info">
								<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
								<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
							</ul>
						</div>

				</div>
				</a>
						<h3 class="staff-title" style="background-color: #4abfe6;">
						<span class="star">★★★★★</span><br/>
						<span>{{$data->about}}</span>
						</h3>
			</div>


			@endforeach
		</div>
		</div>
	</div>
	<a class="detail" href="/purpose/exhibitionhall/3">催事・展示会で利用できるスペースをもっと見る &raquo;</a>
</section>

<section class="gray pattern_1" id="parking">
	<div class="pattern_title">
		<h2>演奏</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			@foreach($query[8] as $data)
			<div class="col-4 col-md-4">

				<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
				<div class="sp-top-rakinbox sp-topbox-area">
					<div class="sp-top-rakinbox__image">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
							<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
							<span class="sp-top-ranking__price-icon">
								<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
								<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
								<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
							</span>
							</p>
					</div>

						<div class="sp-top-ranking__body">
							<div class="sp-top-ranking__body-inner">
								<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
							</div>
							<ul class="sp-top-ranking__body-info">
								<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
								<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
							</ul>
						</div>

				</div>
				</a>
						<h3 class="staff-title" style="background-color: #4abfe6;">
						<span class="star">★★★★★</span><br/>
						<span>{{$data->about}}</span>
						</h3>
			</div>
			@endforeach
		</div>
		</div>
	</div>
	<a class="detail" href="/purpose/performance/8">演奏で利用できるスペースをもっと見る &raquo;</a>
</section>

<section class="gray pattern_1" id="parking">
	<div class="pattern_title">
		<h2>ロケ撮影・写真・動画</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			@foreach($query[9] as $data)
			<div class="col-4 col-md-4">

				<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
				<div class="sp-top-rakinbox sp-topbox-area">
					<div class="sp-top-rakinbox__image">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
							<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
							<span class="sp-top-ranking__price-icon">
								<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
								<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
								<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
							</span>
							</p>
					</div>

						<div class="sp-top-ranking__body">
							<div class="sp-top-ranking__body-inner">
								<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
							</div>
							<ul class="sp-top-ranking__body-info">
								<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
								<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
							</ul>
						</div>

				</div>
				</a>
						<h3 class="staff-title" style="background-color: #4abfe6;">
						<span class="star">★★★★★</span><br/>
						<span>{{$data->about}}</span>
						</h3>
			</div>
			@endforeach
		</div>
		</div>
	</div>
	<a class="detail" href="/purpose/location/9">ロケ撮影･写真･動画で利用できるスペースをもっと見る &raquo;</a>
</section>


<section id="reg_now_4">
	<div class="reg_now_4_title">
		<h2>スペファクプレミアムサービスパック</h2>
		<span>
			貸す人も借りる人も様々なビジネスシーンや「ワクワク ドキドキ」のあれやこれやをお手伝いできる、<br>
			提携パートナーとのスペファクプレミアムサービスパックを<br>
			会員登録（無料）を頂きました皆様へご用意致しております。思う存分有効活用してみてください！
		</span>
	</div>
	<div class="reg_now_4_button"><a href="/purpose/servicepack">詳しくはコチラ</a></div>
</section>

<section class="gray pattern_1" id="parking">
	<div class="pattern_title">
		<h2>結婚式・お祝いシーン</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			@foreach($query[7] as $data)
			<div class="col-4 col-md-4">

				<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
				<div class="sp-top-rakinbox sp-topbox-area">
					<div class="sp-top-rakinbox__image">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
							<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
							<span class="sp-top-ranking__price-icon">
								<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
								<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
								<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
							</span>
							</p>
					</div>

						<div class="sp-top-ranking__body">
							<div class="sp-top-ranking__body-inner">
								<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
							</div>
							<ul class="sp-top-ranking__body-info">
								<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
								<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
							</ul>
						</div>

				</div>
				</a>
						<h3 class="staff-title" style="background-color: #4abfe6;">
						<span class="star">★★★★★</span><br/>
						<span>{{$data->about}}</span>
						</h3>
			</div>
			@endforeach
		</div>
	　</div>
	</div>
	<a class="detail" href="/purpose/wedding/7">結婚式・お祝いシーンで利用できるスペースをもっと見る &raquo;</a>
</section>

<section class="gray pattern_1" id="parking">
	<div class="pattern_title">
		<h2>駐車場</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			@foreach($query[10] as $data)
			<div class="col-4 col-md-4">

				<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
				<div class="sp-top-rakinbox sp-topbox-area">
					<div class="sp-top-rakinbox__image">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
							<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
							<span class="sp-top-ranking__price-icon">
								<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
								<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
								<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
							</span>
							</p>
					</div>

						<div class="sp-top-ranking__body">
							<div class="sp-top-ranking__body-inner">
								<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
							</div>
							<ul class="sp-top-ranking__body-info">
								<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
								<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
							</ul>
						</div>

				</div>
				</a>
						<h3 class="staff-title" style="background-color: #4abfe6;">
						<span class="star">★★★★★</span><br/>
						<span>{{$data->about}}</span>
						</h3>
			</div>
			@endforeach
		</div>
	　</div>
	</div>
	<a class="detail" href="/purpose/parking/10">オフィスで利用できるスペースをもっと見る &raquo;</a>
</section>


<section class="gray pattern_1" id="parking">
	<div class="pattern_title">
		<h2>スポーツ</h2>
	</div>
	<div class="pattern_box">
		<div class="pac">
			<div class="row">
			@foreach($query[11] as $data)
			<div class="col-4 col-md-4">

				<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
				<div class="sp-top-rakinbox sp-topbox-area">
					<div class="sp-top-rakinbox__image">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="関西上位獲得 1,200円～【本町 徒歩3分】インスタ映えのおしやれなお部屋で女子会など/～7名/ごろごろ/Netflix/24h可/ホムパ の写真" class="sp-top-ranking__image-pict">
							<p class="sp-top-ranking__item-price">￥1,200<span class="sp-top-ranking__item-different">〜</span>￥2,100<span class="sp-top-ranking__item-different">/時間</span>
							<span class="sp-top-ranking__price-icon">
								<i class="fa fa-bolt sp-top-ranking__item-instant"></i>
								<span class="icon-spm-top_host sp-top-ranking__item-top-host"></span>
								<i class="icon-spm-discount sp-top-ranking__item-icon-discount"></i>
							</span>
							</p>
					</div>

						<div class="sp-top-ranking__body">
							<div class="sp-top-ranking__body-inner">
								<h3 class="sp-top-ranking__body-title">{{$data->name}}　</h3>
							</div>
							<ul class="sp-top-ranking__body-info">
								<li><i class="fa fa-user mr5"></i>〜{{$data->capacity}}人</li>
								<li><i class="fa fa-map-marker mr5"></i>{{$data->address1}}</li>
							</ul>
						</div>

				</div>
				</a>
						<h3 class="staff-title" style="background-color: #4abfe6;">
						<span class="star">★★★★★</span><br/>
						<span>{{$data->about}}</span>
						</h3>
			</div>
			@endforeach
		</div>
	　</div>
	</div>
	<a class="detail" href="/purpose/sportsinde/11">スポーツで利用できるスペースをもっと見る &raquo;</a>
</section>
	</div>
</div>

@stop
