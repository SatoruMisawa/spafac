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
						<h1 class="box-title">宿泊施設情報</h1>
						<div class="pull-right box-tools"></div>
					</div>
					<div class="box-body pad">
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb">必須</div>
								<div class="BMWerCSq5F">施設の名称</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" maxlength="100" placeholder="例）大阪梅田徒歩5分のレトロな古民家" name="name" type="text">
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb">必須</div>
								<div class="BMWerCSq5F">郵便番号</div>
							</div>
							<p class="help-block">ハイフンなしの半角数字。入力すると住所が自動補完されます。</p>
							<div class="row">
								<div class="col-xs-6 col-sm-3">
									<input id="zip-input" class="form-control p-postal-code" maxlength="7" placeholder="例）5300001" name="zip" type="text">
									<input type="hidden" id="address" class="p-region p-locality p-street-address p-extended-address">
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb">必須</div>
								<div class="BMWerCSq5F">都道府県</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<select class="form-control p-region-id" name="prefecture_id">
										<option value="" selected="selected">選択してください</option>
										<option value="1">北海道</option>
										<option value="2">青森県</option>
										<option value="3">岩手県</option>
										<option value="4">宮城県</option>
										<option value="5">秋田県</option>
										<option value="6">山形県</option>
										<option value="7">福島県</option>
										<option value="8">茨城県</option>
										<option value="9">栃木県</option>
										<option value="10">群馬県</option>
										<option value="11">埼玉県</option>
										<option value="12">千葉県</option>
										<option value="13">東京都</option>
										<option value="14">神奈川県</option>
										<option value="15">新潟県</option>
										<option value="16">富山県</option>
										<option value="17">石川県</option>
										<option value="18">福井県</option>
										<option value="19">山梨県</option>
										<option value="20">長野県</option>
										<option value="21">岐阜県</option>
										<option value="22">静岡県</option>
										<option value="23">愛知県</option>
										<option value="24">三重県</option>
										<option value="25">滋賀県</option>
										<option value="26">京都府</option>
										<option value="27">大阪府</option>
										<option value="28">兵庫県</option>
										<option value="29">奈良県</option>
										<option value="30">和歌山県</option>
										<option value="31">鳥取県</option>
										<option value="32">島根県</option>
										<option value="33">岡山県</option>
										<option value="34">広島県</option>
										<option value="35">山口県</option>
										<option value="36">徳島県</option>
										<option value="37">香川県</option>
										<option value="38">愛媛県</option>
										<option value="39">高知県</option>
										<option value="40">福岡県</option>
										<option value="41">佐賀県</option>
										<option value="42">長崎県</option>
										<option value="43">熊本県</option>
										<option value="44">大分県</option>
										<option value="45">宮崎県</option>
										<option value="46">鹿児島県</option>
										<option value="47">沖縄県</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb">必須</div>
								<div class="BMWerCSq5F">市区町村</div>
							</div>
							<p class="help-block">漢字</p>
							<div class="row">
								<div class="col-sm-9">
									<input class="form-control" maxlength="100" placeholder="例）大阪市北区" name="address1" type="text">
								</div>
							</div>
							<p class="help-block">フリガナ</p>
							<div class="row">
								<div class="col-sm-9">
									<input class="form-control" maxlength="100" placeholder="例）オオサカシキタク" name="address1_ruby" type="text">
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb">必須</div>
								<div class="BMWerCSq5F">町名・番地</div>
							</div>
							<p class="help-block">漢字</p>
							<div class="row">
								<div class="col-sm-9">
									<input class="form-control p-street-address" maxlength="100" placeholder="例）梅田5丁目4-1" name="address2" type="text">
								</div>
							</div>
							<p class="help-block">フリガナ</p>
							<div class="row">
								<div class="col-sm-9">
									<input class="form-control" maxlength="100" placeholder="例）ウメダ5チョウメ4-1" name="address2_ruby" type="text">
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb bg-blue">任意</div>
								<div class="BMWerCSq5F">ビル名・部屋番号</div>
							</div>
							<p class="help-block">漢字</p>
							<div class="row">
								<div class="col-sm-9">
									<input class="form-control p-extended-address" maxlength="100" placeholder="例）梅田古民家ビル" name="address3" type="text">
								</div>
							</div>
							<p class="help-block">フリガナ</p>
							<div class="row">
								<div class="col-sm-9">
									<input class="form-control" maxlength="100" placeholder="例）ウメダコミンカビル" name="address3_ruby" type="text">
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb">必須</div>
								<div class="BMWerCSq5F">地図の設定</div>
							</div>
							<div class="row">
								<div class="col-sm-9">
									<input id="latitude" class="form-control" name="latitude" type="hidden" value="34.702715">
									<input id="longitude" class="form-control" name="longitude" type="hidden" value="135.495908">
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb">必須</div>
								<div class="BMWerCSq5F">アクセス</div>
							</div>
							<p class="help-block">最寄り駅からの歩き方や所要時間、高速道路の出口などを入力してください。</p>
							<div class="row">
								<div class="col-sm-9">
									<textarea class="form-control" rows="4" placeholder="例）JR梅田より徒歩7分" name="access" cols="50"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb">必須</div>
								<div class="BMWerCSq5F">電話番号</div>
							</div>
							<p class="help-block">この情報は予約が確定次第ゲストに送信される利用日程表で開示されます。</p>
							<div class="row">
								<div class="col-xs-6 col-sm-3">
									<input class="form-control" maxlength="20" placeholder="例）09012345678" name="tel" type="text">
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb">必須</div>
								<div class="BMWerCSq5F">施設の種類</div>
							</div>
							<div class="row radio">
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
												<input checked="checked" name="facility_kind_id" type="radio" value="1" style="position: absolute; opacity: 0;">
												<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
											</div>
											イベントスペース
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="3" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											オフィススペース
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="7" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											カフェ
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="10" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											ギャラリー
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="6" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											スタジオ
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="12" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											スポーツ施設
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="17" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											その他
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="11" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											バー
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="4" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											ホール
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="13" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											ホテル
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="8" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											レストラン
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="16" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											ワイナリー・蔵
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="5" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											会議室
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="14" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											住宅
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="15" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											倉庫
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="9" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											映画館
										</label></span>
								</div>
								<div class="col-md-3 col-xs-6">
									<span class="A8fgr49Bnkitu"><label>
											<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input
												 checked="checked" name="facility_kind_id" type="radio" value="9" style="position: absolute; opacity: 0;"><ins
												 class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											結婚式場
										</label></span>
								</div>
							</div>
						</div>
					</div>
				</div>
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