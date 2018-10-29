@extends('layouts2.master')

@section('content')
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-18" class="post-18 page type-page status-publish hentry">
				<header class="entry-header">
					<h1 class="entry-title">新規会員登録</h1>
				</header>
				<!-- .entry-header -->
				<div class="entry-content">
					<form>
						<table class="form__table01">
							<tr>
								<td><span>ニックネーム</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>パスワード</span></td>
								<td><input type="password"></td>
							</tr>
							<tr>
								<td><span>パスワードの確認</span></td>
								<td><input type="password"></td>
							</tr>
							<tr>
								<td><span>姓名</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>ふりがな</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>メールアドレス</span><br /><i>（メールアドレスがログインID）</i></td>
								<td><input type="mail"></td>
							</tr>
							<tr>
								<td><span>電話番号</span></td>
								<td><input type="tel"></td>
							</tr>
							<tr>
								<td><span>性別</span></td>
								<td>
									<select name="year">
										<option value="">&#8212;-</option>
										<option value="man">男性</option>
										<option value="woman">女性</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><span>生年月日</span></td>
								<td>
									<select name="year">
										<option value="">&#8212;-</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
									</select>
									<select name="month">
										<option value="">&#8212;-</option>
										<option value="1">1月</option>
										<option value="2">2月</option>
										<option value="3">3月</option>
										<option value="4">4月</option>
									</select>
									<select name="day">
										<option value="">&#8212;-</option>
										<option value="1">1日</option>
										<option value="2">2日</option>
										<option value="3">3日</option>
										<option value="4">4日</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><span>血液型</span></td>
								<td>
									<select name="blood">
										<option value="">&#8212;-</option>
										<option value="A">A型</option>
										<option value="B">B型</option>
										<option value="O">O型</option>
										<option value="AB">AB型</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><span>郵便番号</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>都道府県</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>住所</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>建物名</span></td>
								<td><input type="text"></td>
							</tr>
						</table>
						<div class="form__check">
							<p><input type="radio">個人</p>
							<p><input type="radio">法人</p>
						</div>
						<table class="form__table02">
							<tr>
								<td><span>会社名（団体名）</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>部署</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>担当者</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>担当者電話番号</span></td>
								<td><input type="text"></td>
							</tr>
							<tr>
								<td><span>会社電話番号</span></td>
								<td><input type="text"></td>
							</tr>
						</table>
						<div class="form__button">
							<input type="submit" value="内容を確認して送信≫">
						</div>
					</form>
				</div>
				<!-- .entry-content -->
			</article>
			<!-- #post-18 -->
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
</div>
<!-- #content -->
@stop
