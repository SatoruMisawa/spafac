@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
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
							<h1 class="box-title">アカウント</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="box-body pad">
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">担当者名</div></div>
									<div class="row">
										<p class="help-block">漢字</p>
										<div class="col-sm-9">
											<input class="sp_profile_sacv_form-control p-locality" maxlength="15" placeholder="性" name="name" type="text">
											<input class="sp_profile_sacv_form-control p-locality" maxlength="15" placeholder="名" name="name" type="text">
										</div>
									</div>
									<div class="row">
										<p class="help-block">フリガナ</p>
										<div class="col-sm-9">
											<input class="sp_profile_sacv_form-control p-locality" maxlength="15" placeholder="セイ" name="name" type="text">
											<input class="sp_profile_sacv_form-control p-locality" maxlength="15" placeholder="メイ" name="name" type="text">
										</div>
									</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">メールアドレス</div></div>
								<div class="row">
									<div class="col-xs-6 col-sm-3">
										<input id="zip-input" class="form-control p-postal-code" maxlength="15" placeholder="" name="address" type="text">
										<input type="hidden" id="address" class="p-region p-locality p-street-address p-extended-address">
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">性別</div></div>
									<div class="row">
										<div class="col-sm-6">
											<select class="sp_sex-form-control p-region-id" name="prefecture_id">
												<option value="" selected="selected">選択してください</option>
												<option value="1">女性</option>
												<option value="2">男性</option>
												<option value="3">指定しない</option>
											</select>
										</div>
									</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">生年月日</div></div>
									<div class="row">
										<div class="col-sm-8">
											<select class="sp_birthdatebox p-region-id" name="prefecture_id">
												<option value="1898">1898</option>
												<option value="1899">1899</option>
												<option value="1900">1900</option>
												<option value="1901">1901</option>
												<option value="1902">1902</option>
												<option value="1903">1903</option>
												<option value="1904">1904</option>
												<option value="1905">1905</option>
												<option value="1906">1906</option>
												<option value="1907">1907</option>
												<option value="1908">1908</option>
												<option value="1909">1909</option>
												<option value="1910">1910</option>
												<option value="1911">1911</option>
												<option value="1912">1912</option>
												<option value="1913">1913</option>
												<option value="1914">1914</option>
												<option value="1915">1915</option>
												<option value="1916">1916</option>
												<option value="1917">1917</option>
												<option value="1918">1918</option>
												<option value="1919">1919</option>
												<option value="1920">1920</option>
												<option value="1921">1921</option>
												<option value="1922">1922</option>
												<option value="1923">1923</option>
												<option value="1924">1924</option>
												<option value="1925">1925</option>
												<option value="1926">1926</option>
												<option value="1927">1927</option>
												<option value="1928">1928</option>
												<option value="1929">1929</option>
												<option value="1930">1930</option>
												<option value="1931">1931</option>
												<option value="1932">1932</option>
												<option value="1933">1933</option>
												<option value="1934">1934</option>
												<option value="1935">1935</option>
												<option value="1936">1936</option>
												<option value="1937">1937</option>
												<option value="1938">1938</option>
												<option value="1939">1939</option>
												<option value="1940">1940</option>
												<option value="1941">1941</option>
												<option value="1942">1942</option>
												<option value="1943">1943</option>
												<option value="1944">1944</option>
												<option value="1945">1945</option>
												<option value="1946">1946</option>
												<option value="1947">1947</option>
												<option value="1948">1948</option>
												<option value="1949">1949</option>
												<option value="1950">1950</option>
												<option value="1951">1951</option>
												<option value="1952">1952</option>
												<option value="1953">1953</option>
												<option value="1954">1954</option>
												<option value="1955">1955</option>
												<option value="1956">1956</option>
												<option value="1957">1957</option>
												<option value="1958">1958</option>
												<option value="1959">1959</option>
												<option value="1960">1960</option>
												<option value="1961">1961</option>
												<option value="1962">1962</option>
												<option value="1963">1963</option>
												<option value="1964">1964</option>
												<option value="1965">1965</option>
												<option value="1966">1966</option>
												<option value="1967">1967</option>
												<option value="1968">1968</option>
												<option value="1969">1969</option>
												<option value="1970">1970</option>
												<option value="1971">1971</option>
												<option value="1972">1972</option>
												<option value="1973">1973</option>
												<option value="1974">1974</option>
												<option value="1975">1975</option>
												<option value="1976">1976</option>
												<option value="1977">1977</option>
												<option value="1978">1978</option>
												<option value="1979">1979</option>
												<option value="1980">1980</option>
												<option value="1981">1981</option>
												<option value="1982">1982</option>
												<option value="1983">1983</option>
												<option value="1984">1984</option>
												<option value="1985">1985</option>
												<option value="1986">1986</option>
												<option value="1987">1987</option>
												<option value="1988">1988</option>
												<option value="1989">1989</option>
												<option value="1990">1990</option>
												<option value="1991" selected="selected">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2006">2007</option>
												<option value="2006">2008</option>
												<option value="2006">2009</option>
												<option value="2006">2010</option>
												<option value="2006">2011</option>
												<option value="2006">2012</option>
											</select>
											<span class="FormItem__Unit-oe304i-5 hguKws">年</span>
											<select class="sp_birthdatebox p-region-id" name="prefecture_id">
													<option value="" selected="selected">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
											</select>
											<span class="FormItem__Unit-oe304i-5 hguKws">月</span>
											<select class="sp_birthdatebox p-region-id" name="prefecture_id">
												<option value="" selected="selected">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
											</select>
											<span class="FormItem__Unit-oe304i-5 hguKws">日</span>
										</div>
									</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">プロフィール画像</div></div>
								<div class="profimg"> <img class="sp_profileimage_djghyr" src="../../../images/default_user.png" alt=""/></div>
								<div class="row">
									<div class="upload">
										<label><input type="file" class="disnone"></label>
									</div>
								</div>
								<div class="form-group ">
										<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">電話番号</div></div>
											<div class="row">
												<div class="col-sm-6">
													<input class="form-control" maxlength="15" placeholder="090-0000-0000" name="tel" type="text">
												</div>
											</div>
								</div>
								<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">身分証明書</div></div>
										<p class="help-block">以下のうち、いずれかの画像をアップロードしてください。</p>
										<h3 class="sp_licenseh3">免許証 / パスポート / 住基カード</h3>
									<div class="row">
										<div class="col-sm-9">
											<div class="imgContainer"><img class="sp_license_image_Bnkhif" src="../../../images/sp_license_image.png" alt=""/></div>
											<div class="caution">
											<ul>
												<li class="sp_license_txt_Deghbu">※カラーの画像をご用意ください。</li>
												<li class="sp_license_txt_Deghbu">※免許証は写真の入った表面のみをお送りください。</li>
												<li class="sp_license_txt_Deghbu">※パスポートは写真の入ったページと外務大臣印のあるページの見開きをお送りください。</li>
												<li class="sp_license_txt_Deghbu">※住基カードは写真の入った表面のみをお送りください。</li>
												<li class="sp_license_txt_Deghbu">※証明書部分が切れていないこと、影や反射がないこと、ピントがあっていることを確認し、内容が読み取りやすい画像をご用意ください。</li>
											</ul>
											</div>
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
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">個人・法人</div></div>
									<p class="help-block">個人か法人のどちらかを選択してください</p>
									<div class="row">
											<div class="col-sm-6">
												<select class="sp_sex-form-control p-region-id" name="prefecture_id">
													<option value="" selected="selected">選択してください</option>
													<option value="1">個人</option>
													<option value="2">法人</option>
												</select>
											</div>
										</div>
								</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">プロフィール</div></div>
									<p class="help-block">自己紹介を充実させてあなたの人柄など詳しく知ってもらいましょう。</p>
										<div class="row">
											<div class="col-sm-9">
												<textarea class="form-control" rows="6" placeholder="" name="profile" cols="50"></textarea>
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
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">Anything you want</div>
			<!-- Default to the left -->
			<strong>Copyright © 2018- <a href="#">SPACE FACTORY</a>.</strong> All rights reserved.
		</footer>			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Create the tabs -->
				<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
					<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
					<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<!-- Home tab content -->
					<div class="tab-pane active" id="control-sidebar-home-tab">
						<h3 class="control-sidebar-heading">Recent Activity</h3>
						<ul class="control-sidebar-menu">
							<li>
								<a href="javascript:;">
									<i class="menu-icon fa fa-birthday-cake bg-red"></i>
									<div class="menu-info">
										<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
										<p>Will be 23 on April 24th</p>
									</div>
								</a>
							</li>
						</ul>
						<!-- /.control-sidebar-menu -->
						<h3 class="control-sidebar-heading">Tasks Progress</h3>
						<ul class="control-sidebar-menu">
							<li>
								<a href="javascript:;">
									<h4 class="control-sidebar-subheading">
										Custom Template Design
										<span class="pull-right-container">
										<span class="label label-danger pull-right">70%</span>
										</span>
									</h4>
									<div class="progress progress-xxs">
										<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
									</div>
								</a>
							</li>
						</ul>
						<!-- /.control-sidebar-menu -->
					</div>
					<!-- /.tab-pane -->
					<!-- Stats tab content -->
					<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
					<!-- /.tab-pane -->
					<!-- Settings tab content -->
					<div class="tab-pane" id="control-sidebar-settings-tab">
						<form method="post">
							<h3 class="control-sidebar-heading">General Settings</h3>
							<div class="form-group">
								<label class="control-sidebar-subheading">
								Report panel usage
								<div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="pull-right" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
								</label>
								<p>
									Some information about this general settings option
								</p>
							</div>
							<!-- /.form-group -->
						</form>
					</div>
					<!-- /.tab-pane -->
				</div>
			</aside>
			<!-- /.control-sidebar -->
			<!-- Add the sidebar's background. This div must be placed
				immediately after the control sidebar -->
			<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->
	<!-- REQUIRED JS SCRIPTS -->
	<script src="https://test.spafac.com/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="https://test.spafac.com/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="https://test.spafac.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="https://test.spafac.com/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="https://test.spafac.com/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.ja.min.js"></script>
	<script src="https://test.spafac.com/bower_components/admin-lte/plugins/iCheck/icheck.min.js"></script>
	<script src="https://test.spafac.com/bower_components/admin-lte/dist/js/adminlte.min.js"></script>
	<script src="//yubinbango.github.io/yubinbango/yubinbango.js"></script>
	<script src="https://test.spafac.com/js/media.js"></script>
	<script>
		$(function() {
			$('input[type="checkbox"], input[type="radio"]').iCheck({
				checkboxClass: 'icheckbox_flat-green',
				radioClass: 'iradio_flat-green'
			});
				
			$('.datepicker').datepicker({
				autoclose: true,
				language: 'ja',
				format: 'yyyy-mm-dd'
			});
		});
	</script>
<!-- /.content -->
@stop




