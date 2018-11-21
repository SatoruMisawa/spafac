@extends('stay.host.layouts.master')
<!-- Main Header -->

<!-- <header class="main-header">
			<div class="inner_admin">
				<div id="nav-drawer" class="pc_hide">
					<input id="nav-input" type="checkbox" class="nav-unshown">
					<label class="menu-trigger" for="nav-input">
						<span></span>
						<span></span>
						<span></span>
					</label>
					<label class="nav-unshown" id="nav-close" for="nav-input"></label>
					<div id="nav-content">
						<ul>
							<li><a href="#">ダッシュボード</a></li>
							<li><a href="#">スペース管理</a></li>
							<li><a href="#">予約管理</a></li>
							<li><a href="#">メッセージBOX</a></li>
							<li><a href="#">売上管理</a></li>
							<li><a href="#">設定</a></li>
							<li><a href="https://test.spafac.com/help">ヘルプ</a></li>
							<li><a href="https://test.spafac.com/inquiry">お問い合わせ</a></li>
							<li class="list-your-thing pull-left"><a class="btn btn-host" href="#">スペースを登録</a></li>
						</ul>
					</div>
				</div>
				<div class="head_l_admin cf">
					@include('stay.host.layouts.header')
				</div>
			</div>
		</header> -->

<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper" style="min-height: 622px;">
		<section class="content container-fluid">
			<div class="row">
				<div class="col-md-12">
					<form method="POST" action="/host/facilities" accept-charset="UTF-8" class="h-adr"></form>
						<input name="_token" type="hidden" value="nJaPejfPXkdepu0EGb0HsAiDyaH85zX05RR2T1oX">
						<input type="hidden" name="_token" value="nJaPejfPXkdepu0EGb0HsAiDyaH85zX05RR2T1oX">
						<input type="hidden" class="p-country-name" value="Japan">
					<div class="box box-info">
						<div class="box-header">
							<h1 class="box-title">基本情報</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="box-body pad">
						<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">スペースのタイトル</div></div>
									<p class="help-block">スペースのタイトルやキャッチコピー・特徴を記述してください。最大64文字。</p>
								<div class="row">
									<div class="col-sm-10">
										<input class="form-control" maxlength="64" placeholder="例）キッチン付きのスペースで女子会・誕生日会・会議利用も可能！" name="name" type="text">
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">スペースの説明</div></div>
									<p class="help-block">スペースの詳細説明、利用用途、周辺施設などを記述してください。10文字以上800文字以内。</p>
								<div class="row">
									<div class="col-sm-10">
										<textarea class="form-control" rows="3" maxlength="800" placeholder="オプションの説明"></textarea>
										<p class="help-block">例）女子会や誕生日会から会議まで様々な用途でご利用です。マンションの前にコンビニ、最寄り駅前にスーパーがあります。</p>
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">用途</div></div>
									<p class="help-block">スペースをどのような目的に使用してもよいか選択してください。複数選択可能です。</p>
								<div class="Asibut7nduS">
									<div class="B8durTgfsd">
									<div class="TgutiYh8rfjfo">
										<label class="purposelabel_ER3F5GYUt">
											<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
										</label>
										<span class="purposenameS4gbt6Yhnj">出張・ビジネス</span>
									</div>
									<div class="TgutiYh8rfjfo">
											<label class="purposelabel_ER3F5GYUt">
												<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											</label>
											<span class="purposenameS4gbt6Yhnj">パーティ</span>
									</div>
									<div class="TgutiYh8rfjfo">
											<label class="purposelabel_ER3F5GYUt">
												<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											</label>
											<span class="purposenameS4gbt6Yhnj">旅行</span>
									</div>
									<div class="TgutiYh8rfjfo">
											<label class="purposelabel_ER3F5GYUt">
												<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											</label>
											<span class="purposenameS4gbt6Yhnj">合宿・グループ</span>
									</div>
									<div class="TgutiYh8rfjfo">
											<label class="purposelabel_ER3F5GYUt">
												<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											</label>
											<span class="purposenameS4gbt6Yhnj">バケーションレンタル</span>
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">最大収容人数</div></div>	
									<div class="row radio">
										<div class="col-md-3 col-xs-6">
											<span class="A8fgr49Bnkitu">
												<label>
													<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													シェアルーム
												</label>
											</span>
										</div>
										<div class="col-md-3 col-xs-6">
											<span class="A8fgr49Bnkitu">
												<label>
													<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													個室
												</label>
											</span>
										</div>
										<div class="col-md-3 col-xs-6">
												<span class="A8fgr49Bnkitu">
													<label>
														<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
														entire_place
														</label>
												</span>
											</div>
										</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">最大宿泊可能人数</div></div>
								<div class="row">
									<div class="col-sm-9">
										<input class="form-control p-locality" maxlength="100" placeholder="5" name="address1" type="text"><span class="FormItem__Unit-oe304i-5 hguKws">人</span>
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">部屋とベッド</div></div>
									<div class="row">
										<div class="col-sm-9">
											<p class="help-block2">ベッドルーム　　　　　　　　ベッド（布団）</p>
											<input class="form-control p-locality" maxlength="10" placeholder="1" name="money" type="text">
											<span class="FormItem__Unit-oe304i-5 hguKws">部屋</span>
											<input class="form-control p-locality" maxlength="10" placeholder="1" name="money" type="text">
											<span class="FormItem__Unit-oe304i-5 hguKws">台（枚）</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-9">
											<p class="help-block2">バスルーム　　　　　　　　トイレ</p>
											<input class="form-control p-locality" maxlength="10" placeholder="1" name="money" type="text">
											<span class="FormItem__Unit-oe304i-5 hguKws">部屋</span>
											<input class="form-control p-locality" maxlength="10" placeholder="1" name="money" type="text">
											<span class="FormItem__Unit-oe304i-5 hguKws">箇所</span>
										</div>
									</div>
							</div>
							<!--content start-->
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">床面積</div></div>
								<div class="row">
									<div class="col-sm-9">
										<input class="form-control p-locality" maxlength="100" placeholder="50" name="address1" type="text"><span class="FormItem__Unit-oe304i-5 hguKws">㎡</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">鍵の受け渡し</div></div>
									<div class="row radio">
										<div class="col-md-3 col-xs-6">
											<span class="A8fgr49Bnkitu">
												<label>
													<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													対面
												</label>
											</span>
										</div>
										<div class="col-md-3 col-xs-6">
											<span class="A8fgr49Bnkitu">
												<label>
													<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													キーボックス
												</label>
											</span>
										</div>
									</div>
									<div class="row radio">
										<div class="col-md-3 col-xs-6">
											<span class="A8fgr49Bnkitu">
												<label>
													<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													スマートロックス
												</label>
											</span>
										</div>
										<div class="col-md-3 col-xs-6">
											<span class="A8fgr49Bnkitu">
												<label>
													<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													予約成立後にメッセージで伝える
												</label>
											</span>
										</div>
									</div>
							</div>
							<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">予約の締切</div></div>
										<p class="help-block">利用日の何日前に予約を締め切るかを設定してください。<br>
										例）「利用日の7日前」に設定→ゲストが4月8日に利用したい場合、4月1日以前に予約をする必要があります。</p>
										<div class="row">
											<div class="col-sm-6">
												<select class="form-control p-region-id" name="prefecture_id">
													<option value="" selected="selected">選択してください</option>
													<option value="1">利用日当日</option>
													<option value="2">利用日の1日前</option>
													<option value="3">利用日の2日前</option>
													<option value="4">利用日の3日前</option>
													<option value="5">利用日の7日前</option>
													<option value="6">利用日の14日前</option>
												</select>
											</div>
										</div>
							</div>
							<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">予約の受付期間</div></div>
										<p class="help-block">ゲストが予約リクエストする日を起点として、利用日が何ヶ月先までの予約を受け付けるか設定してください。
												例）「12ヶ月先まで予約を受け付ける」を設定→2018年4月1日の場合、2019年4月1日まで予約を受け付けます。</p>
										<div class="row">
											<div class="col-sm-6">
												<select class="form-control p-region-id" name="prefecture_id">
													<option value="" selected="selected">選択してください</option>
													<option value="1">3ヶ月先まで予約を受け付ける</option>
													<option value="2">6ヶ月先まで予約を受け付ける</option>
													<option value="3">9ヶ月先まで予約を受け付ける</option>
													<option value="4">12ヶ月先まで予約を受け付ける</option>
												</select>
											</div>
										</div>
							</div>
							<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">営業の選択</div></div>
										<p class="help-block">営業の種類を選択をしてください。</p>
										<div class="row">
											<div class="col-sm-6">
												<select class="form-control p-region-id" name="prefecture_id">
													<option value="" selected="selected">営業を選択してください</option>
													<option value="1">ホテル旅館</option>
													<option value="2">簡易宿所</option>
													<option value="3">下宿</option>
													<option value="4">民泊特区</option>
													<option value="4">民泊新法</option>
												</select>
											</div>
										</div>
							</div>
							<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">旅館業許可書/特定認定書</div></div>
										<p class="help-block">記載事項が分かる写真、またはPDFファイルをアップロードしてください。</p>
									<div class="row">
										<div class="col-sm-6">
											<div class="upload">
												<label><input type="file" class="disnone"></label>
											</div>
											<div class="upload">
												<label><input type="file" class="disnone"></label>
											</div>
											<div class="upload">
												<label><input type="file" class="disnone"></label>
											</div>
										</div>
									</div>
							</div>
							<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">民泊新法届出番号</div></div>
										<p class="help-block">営業の種類を民泊新法にした場合は入力してください。</p>
									<div class="row">
										<div class="col-sm-6">
											<input class="form-control" maxlength="25" placeholder="M123456789" name="optionname" type="text">
										</div>
									</div>
							</div>
	
							<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">アメニティ</div></div>
										<p class="help-block">スペースをどのような目的に使用してもよいか選択してください。複数選択可能です。</p>
									<div class="Asibut7nduS">
										<div class="B8durTgfsd">
										<div class="TgutiYh8rfjfo">
											<label class="purposelabel_ER3F5GYUt">
												<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											</label>
											<span class="purposenameS4gbt6Yhnj">テーブル</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">椅子</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">プロジェクター</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">駐車場</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">Wi-Fi</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">ホワイトボード</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">キッチン設備</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">調理器具</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">テレビ</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">プリンター</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">ロッカー</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">携帯充電器</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">ケータリング</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">音響設備</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">ミラー</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">シャワー</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">更衣室</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">写真撮影機材</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">動画撮影機材</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">照明</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">トイレ</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">冷蔵冷凍庫</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">冷蔵庫</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">冷凍庫</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">電子レンジ</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">ケトル</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">エアコン</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">駅が近い</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">飲食店</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">バー</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">コンビニ</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">スーパー</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">ペット可</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">バリアフリー</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">飲食可能</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">飲酒可能</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">お子様連れ</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">シニア</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">喫煙可能</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">禁煙</span>
										</div>
										<div class="TgutiYh8rfjfo">
												<label class="purposelabel_ER3F5GYUt">
													<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
												</label>
												<span class="purposenameS4gbt6Yhnj">喫煙所あり</span>
										</div>
									</div>
								</div>
								<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">設備・サービスについて</div></div>
									<p class="help-block">設備やサービスについて説明を記述してください。10文字以上800文字以内。</p>
								<div class="row">
									<div class="col-sm-10">
										<textarea class="form-control" rows="3" maxlength="800" placeholder="オプションの説明"></textarea>
										<p class="help-block">例）キッチン用品やホワイトボードなどを完備。Wi-Fiなどの設定方法やその他の備品は予約リクエスト時にお問い合わせ下さい。</p>
									</div>
								</div>
								</div>
								<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb bg-blue">任意</div><div class="BMWerCSq5F">注意事項</div></div>
										<p class="help-block">スペースを利用する際の注意事項やお願いなどを記述して下さい。10文字以上800文字以内。</p>
									<div class="row">
										<div class="col-sm-10">
											<textarea class="form-control" rows="3" maxlength="800" placeholder="オプションの説明"></textarea>
											<p class="help-block">例）燃えるゴミや燃えないごみの分別はお願いします。ゴミ袋は1枚（45L）50円で、撤収時の精算になります。</p>
										</div>
									</div>
								</div>
						</div><!--box-body pad　END-->
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">
								<font style="vertical-align: inherit;">
									<font class="preservation-button" style="vertical-align: inherit;">保存</font>
								</font>
							</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</section>
	</div>
<!-- /.content-wrapper -->
<!-- Main Footer -->
@endsection