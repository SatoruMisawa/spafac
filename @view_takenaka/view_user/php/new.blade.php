@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/assets/css/registration-contract.css">


<div class="site-main">
	<div class="site-main">
		<div class="page__even lp-page__padding">
			<div class="page__col1">
				<div class="signup-head">
					<h1 class="page-title">アカウント新規登録</h1>
					<ul class="signup-step mb20">
						<li class="signup-step__status1 is-current">新規登録</li>
						<li class="signup-step__status3">登録完了</li>
						<li class="signup-step__status2"><span class="sm-hide">メールアドレスの</span>確認</li>
					</ul>
				</div>

				<div class="signup-box">
							<div class="row">
								<div class="col-xs-12">
									<h2 class="signup-box__title">メールアドレスで新規登録</h2>
										<div class="signup-box__wrapper-form">
											<div class="row signup-box__md-top">
												<div>
												<input name="utf8" type="hidden" value="✓">
												<input type="hidden" name="user[registration_type]" id="user_registration_type" value="0">
													<div class="col-sm-12 col-md-6">
														<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label w100pa is-upgraded" data-upgraded=",MaterialTextfield">
															<input class="mdl-textfield__input" id="family_name" name="familyName" value="">
															<label class="mdl-textfield__label" for="family_name">姓</label>
														</div>
													</div>
													<div class="col-sm-12 col-md-6">
														<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label w100pa is-upgraded" data-upgraded=",MaterialTextfield">
															<input class="mdl-textfield__input" id="textfield-" name="givenName" value="">
															<label class="mdl-textfield__label" for="textfield-">名</label>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label w100pa is-upgraded" data-upgraded=",MaterialTextfield">
															<input class="mdl-textfield__input" id="textfield-" name="email" value="">
															<label class="mdl-textfield__label" for="textfield-">メールアドレス</label>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label w100pa is-upgraded" data-upgraded=",MaterialTextfield">
															<input class="mdl-textfield__input" id="textfield-" type="password" name="password" value="">
															<label class="mdl-textfield__label" for="textfield-">パスワード</label>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label w100pa is-upgraded" data-upgraded=",MaterialTextfield">
															<input class="mdl-textfield__input" id="textfield-" type="password" name="passwordConfirmation" value="">
															<label class="mdl-textfield__label" for="textfield-">パスワード（確認）</label>
														</div>
													</div>
													<div class="col-xs-12">
														<div class="signup-box__wrapper-form-profile clearfix">
															<label for="files" class="signup-box__wrapper-form-title fl">プロフィール画像</label>
																<div class="" aria-disabled="false" style="position: relative; border: 0px; width: 100%; height: 100%;">
																	<div class="signup-box__wrapper-form-profile__img">
																		<div class="settings-img__change-img">
																			<label for="files" class="button-gray settings-img">
																				<span class="icon-ll"><i class="fa fa-camera"></i></span><br>ファイルを変更
																			</label>
																		</div>
																	</div>
																		<input accept="image/*" type="file" multiple="" autocomplete="off" style="position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; opacity: 1e-05; pointer-events: none;">
																</div>
														</div>
													</div>
														<div class="col-sm-12 ta-c clear">
															<p class="signup-box__wrapper-form-notes">ご登録前に<a href="https://test.spafac.com/terms-of-service/" class="a__underline">SPACE FACTORY利用規約</a>をお読みください。</p>
																<label class="mdl-checkbox mdl-js-checkbox is-upgraded" data-upgraded=",MaterialCheckbox">
																	<input type="checkbox" class="mdl-checkbox__input" id="checkbox-1" name="acceptTermOfService">
																		<span class="mdl-checkbox__label">SPACE FACTORY利用規約に同意する</span>
																		<span class="mdl-checkbox__focus-helper"></span>
																		<span class="mdl-checkbox__box-outline"><span class="mdl-checkbox__tick-outline"></span></span>
																</label>
														</div>
															<div class="col-sm-12 ta-c">
																<div id="google-recaptcha" style="margin: 15px auto 0px; width: 304px; height: 78px;">
																	<div style="width: 304px; height: 78px;">
																		<div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfqeFEUAAAAADAY0fi9k5spAgY3fxR8KVE7-qBb&amp;co=aHR0cHM6Ly9hY2NvdW50LnNwYWNlbWFya2V0LmNvbTo0NDM.&amp;hl=ja&amp;v=v1541614764654&amp;size=normal&amp;cb=nw1fyq5pif34" width="304" height="78" role="presentation" name="a-c9bwud9v2pan" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div>
																			<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
																		</div>
																	</div>
																</div>
															<div class="col-sm-12 ta-c">
																<button class="sc-iAyFgw ghlXAI" type="button" font-weight="600">
																	<span class="sc-kEYyzF bgQmZj">登録する</span>
																</button>
															</div>
												</div>
											</div>
										</div>
								</div>
							</div>
						</div>
							<div class="signup-box signup-box__new-account">
								<div class="row">
									<div class="signup-box__new-account-txt col-sm-12">
										<a href="/login?done=https%3A%2F%2Fwww.spacemarket.com%2F" class="signup-box__new-account-title">メール認証が完了しました。
											<span class="signup-box__new-account-linktxt">こちら</span>
										</a>
									</div>
								</div>
							</div>

					<div class="signup-box">
						<div class="row">
							<div class="col-xs-12">
								<h2 class="signup-box__title">外部サービスで新規登録</h2>
								<div class="login_box box">
									<div class="sns_login">
										<ul>
											<li class="fb"><a href=""><img src="<?php echo url('assets/mypage/img/fb2.png'); ?>" alt=""><span>Facebookで登録</span></a></li>
											<li class="ya"><a href=""><img src="<?php echo url('assets/mypage/img/ya.png'); ?>" alt=""><span>Yahoo!で登録</span></a></li>
											<li class="gg"><a href=""><img src="<?php echo url('assets/mypage/img/gg.png'); ?>" alt=""><span>Googleで登録</span></a></li>
										</ul>
										<p class="signup-box__notes ta-c">Facebookを使ってSPACE FACTORYにログインできます。
											<br class="sm-hide">ログイン以外の目的に使われることはありません。
											<br class="sm-hide"><a href="https://test.spafac.com/terms-of-service/" class="a__underline" target="_blank">SPACE FACTORY利用規約</a>をお読みになり同意の上、登録へお進みください。
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

			</div>
		</div>
	</div>
</div>
@stop
