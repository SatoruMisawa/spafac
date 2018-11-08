@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/registration-contract.css">
<div id="content" class="site-content signin">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-18" class="post-18 page type-page status-publish hentry">
				<header class="entry-header">
					<h1 class="entry-title">新規会員登録</h1>
				</header>
				<!-- .entry-header -->
				<div class="entry-content">
					{{ Form::open(['id' => 'form', 'action' => ['UserController@create'], 'class' => 'h-adr']) }}
						<input type="hidden" class="p-country-name" value="Japan">
						<table class="form__table01">
							<tr>
								<td><span>姓名</span></td>
								@include('layouts.error', ['name' => 'name'])
								<td>
									{{ Form::text('name', null, ['maxlength' => '20']) }}
								</td>
							</tr>
							<tr>
								<td><span>ニックネーム</span></td>
								@include('layouts.error', ['name' => 'nickname'])
								<td>
										{{ Form::text('nickname', null, ['maxlength' => '20']) }}
								</td>
							</tr>
							<tr>
								<td><span>メールアドレス</span><br /><i>（メールアドレスがログインID）</i></td>
								@include('layouts.error', ['name' => 'email'])
								<td>
									{{ Form::text('email', null, ['maxlength' => '100']) }}
								</td>
							</tr>
							<tr>
								<td><span>電話番号</span></td>
								@include('layouts.error', ['name' => 'tel'])
								<td>
									{{ Form::text('tel', null, ['maxlength' => '20']) }}
								</td>
							</tr>
							<tr>
								<td><span>パスワード</span></td>
								@include('layouts.error', ['name' => 'password'])
								<td>
									{{ Form::password('password', ['maxlength' => '20']) }}
								</td>
							</tr>
							<tr>
								<td><span>パスワードの確認</span></td>
								@include('layouts.error', ['name' => 'password_confirmation'])
								<td>
									{{ Form::password('password_confirmation', ['maxlength' => '20']) }}									
								</td>
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
