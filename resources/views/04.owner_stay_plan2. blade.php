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
					<form method="POST" action="https://test.spafac.com/host/facilities" accept-charset="UTF-8" class="h-adr"></form>
						<input name="_token" type="hidden" value="nJaPejfPXkdepu0EGb0HsAiDyaH85zX05RR2T1oX">
						<input type="hidden" name="_token" value="nJaPejfPXkdepu0EGb0HsAiDyaH85zX05RR2T1oX">
						<input type="hidden" class="p-country-name" value="Japan">
					<div class="box box-info">
						<div class="box-header">
							<h1 class="box-title">新規プラン作成</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="box-body pad">
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">プランのタイトル</div></div>
									<p class="help-block">プランのタイトルを記述してください。</p>
								<div class="row">
									<div class="col-sm-10">
										<input class="form-control" maxlength="64" placeholder="プランのタイトル" name="name" type="text">
									</div>
								</div>
							</div>
							<!--content start-->
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb bg-blue">任意</div><div class="BMWerCSq5F">プランの説明</div></div>
									<p class="help-block">プランの名称を記述してください。</p>
								<div class="row">
									<div class="col-sm-10">
										<textarea class="form-control" rows="3" maxlength="800" placeholder="オプションの説明"></textarea>
										<p class="help-block">例）Wi-Fi、ホワイトボード完備で会議からイベントまでご利用いただけます。その他必要な備品につきましては予約リクエスト時にお問い合わせください。</p>
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">価格</div></div>
								<p class="help-block">宿泊人数が多い場合に追加料金を設定することができます。</p>
								<div class="row">
									<div class="col-sm-9">
										<p class="help-block">1泊あたりの価格　　　　　　　　設定した価格で泊まれる人数</p>
										<span class="FormItem__Unit-oe304i-5 hguKws">¥</span>
										<input class="form-control p-locality" maxlength="4" placeholder="1" name="money" type="text">
										<span class="FormItem__Unit-oe304i-5 hguKws">/泊</span>
										<input class="form-control p-locality" maxlength="4" placeholder="5" name="money" type="text">
										<span class="FormItem__Unit-oe304i-5 hguKws">人</span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-9">
										<p class="help-block">1人超過毎の追加料金</p>
										<span class="FormItem__Unit-oe304i-5 hguKws">¥</span>
										<input class="form-control p-locality" maxlength="10" placeholder="10000" name="money" type="text">
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">宿泊可能日数</div></div>
									<p class="help-block">連続で宿泊可能な日数を入力してください。</p>
									<div class="row">
										<div class="col-sm-9">
											<p class="help-block">最小宿泊日数　　　　　　　　最大宿泊日数</p>
											<input class="form-control p-locality" maxlength="4" placeholder="1" name="money" type="text">
											<span class="FormItem__Unit-oe304i-5 hguKws">日</span>
											<input class="form-control p-locality" maxlength="4" placeholder="5" name="money" type="text">
											<span class="FormItem__Unit-oe304i-5 hguKws">日</span>
										</div>
									</div>
							</div>	
							<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">チェックイン・アウトの時間</div></div>
										<div class="row">
											<div class="col-sm-9">
												<span class="FormItem__Unit-oe304i-5 hguKws">チェックイン</span>
												<select class="sp_time_form-control p-region-id" name="prefecture_id">
													<option value="1">0:00</option>
													<option value="2">1:00</option>
													<option value="3">2:00</option>
													<option value="4">3:00</option>
													<option value="5">4:00</option>
													<option value="6">5:00</option>
													<option value="7">6:00</option>
													<option value="8">7:00</option>
													<option value="9">8:00</option>
													<option value="10">9:00</option>
													<option value="11">10:00</option>
													<option value="12">11:00</option>
													<option value="13">12:00</option>
													<option value="14">13:00</option>
													<option value="15">14:00</option>
													<option value="" selected="selected">15:00</option>
													<option value="16">16:00</option>
													<option value="17">17:00</option>
													<option value="18">18:00</option>
													<option value="19">19:00</option>
													<option value="20">20:00</option>
													<option value="21">21:00</option>
													<option value="22">22:00</option>
													<option value="23">23:00</option>
												</select>
												<span class="FormItem__Unit-oe304i-5 hguKws">〜</span>
												<select class="sp_time_form-control p-region-id" name="prefecture_id">
													<option value="1">0:00</option>
													<option value="2">1:00</option>
													<option value="3">2:00</option>
													<option value="4">3:00</option>
													<option value="5">4:00</option>
													<option value="6">5:00</option>
													<option value="7">6:00</option>
													<option value="8">7:00</option>
													<option value="9">8:00</option>
													<option value="10">9:00</option>
													<option value="11">10:00</option>
													<option value="12">11:00</option>
													<option value="13">12:00</option>
													<option value="14">13:00</option>
													<option value="15">14:00</option>
													<option value="16">15:00</option>
													<option value="17">16:00</option>
													<option value="18">17:00</option>
													<option value="19">18:00</option>
													<option value="20">19:00</option>
													<option value="21">20:00</option>
													<option value="22">21:00</option>
													<option value="" selected="selected">22:00</option>
													<option value="23">23:00</option>
												</select>	
											</div>
										</div>
										<div class="row">
											<div class="col-sm-9">
												<span class="FormItem__Unit-oe304i-5 hguKws">チェックアウト</span>
													<select class="sp_time_form-control p-region-id" name="prefecture_id">
														<option value="1">0:00</option>
														<option value="2">1:00</option>
														<option value="3">2:00</option>
														<option value="4">3:00</option>
														<option value="5">4:00</option>
														<option value="6">5:00</option>
														<option value="7">6:00</option>
														<option value="8">7:00</option>
														<option value="9">8:00</option>
														<option value="10">9:00</option>
														<option value="11">10:00</option>
														<option value="12">11:00</option>
														<option value="13">12:00</option>
														<option value="14">13:00</option>
														<option value="15">14:00</option>
														<option value="" selected="selected">15:00</option>
														<option value="16">16:00</option>
														<option value="17">17:00</option>
														<option value="18">18:00</option>
														<option value="19">19:00</option>
														<option value="20">20:00</option>
														<option value="21">21:00</option>
														<option value="22">22:00</option>
														<option value="23">23:00</option>
												</select>
											</div>
										</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">貸出可能な曜日</div></div>
									<p class="help-block">貸出可能な曜日を設定してください。チェックインの曜日になります。</p>
										<div class="sp_Asibut7nduS">
											<div class="B8durTgfsd">
												<div class="sp_Fgjunibu5">
													<label class="purposelabel_ER3F5GYUt">
														<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													</label>
													<span class="purposenameS4gbt6Yhnj">日</span>
												</div>
												<div class="sp_Fgjunibu5">
													<label class="purposelabel_ER3F5GYUt">
														<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													</label>
													<span class="purposenameS4gbt6Yhnj">月</span>
												</div>
												<div class="sp_Fgjunibu5">
													<label class="purposelabel_ER3F5GYUt">
														<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													</label>
													<span class="purposenameS4gbt6Yhnj">火</span>
												</div>
												<div class="sp_Fgjunibu5">
													<label class="purposelabel_ER3F5GYUt">
														<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													</label>
													<span class="purposenameS4gbt6Yhnj">水</span>
												</div>
												<div class="sp_Fgjunibu5">
													<label class="purposelabel_ER3F5GYUt">
														<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													</label>
													<span class="purposenameS4gbt6Yhnj">木</span>
												</div>
												<div class="sp_Fgjunibu5">
													<label class="purposelabel_ER3F5GYUt">
														<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													</label>
													<span class="purposenameS4gbt6Yhnj">金</span>
												</div>
												<div class="sp_Fgjunibu5">
													<label class="purposelabel_ER3F5GYUt">
														<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													</label>
													<span class="purposenameS4gbt6Yhnj">土</span>
												</div>
											</div>
										</div>
										<div class="form-group">
												<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">予約の承認方式</div></div>
												<p class="help-block">予約にホストの承認が必要かどうかを設定してください。承認なし（今すぐ予約）に設定するとゲストとのやりとりが簡単になり、予約が入りやすくなります。</p>
												<div class="row radio">
													<div class="col-md-3 col-xs-6">
														<span class="A8fgr49Bnkitu">
															<label>
																<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																承認なし(今すぐ予約)
															</label>
														</span>
													</div>
													<div class="col-md-3 col-xs-6">
														<span class="A8fgr49Bnkitu">
															<label>
																<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																承認あり
															</label>
														</span>
													</div>
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

<!-- Main Footer -->
@endsection