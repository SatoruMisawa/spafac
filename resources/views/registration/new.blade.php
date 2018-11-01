@extends('layouts2.master')

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
								<td>
									{{ Form::text('name', null, ['maxlength' => '20']) }}
									{{ App\Helper::error($errors, ['name']) }}
								</td>
							</tr>
							<tr>
								<td><span>ニックネーム</span></td>
								<td>
										{{ Form::text('nickname', null, ['maxlength' => '20']) }}
										{{ App\Helper::error($errors, ['nickname']) }}
								</td>
							</tr>
							<tr>
								<td><span>メールアドレス</span><br /><i>（メールアドレスがログインID）</i></td>
								<td>
									{{ Form::text('email', null, ['maxlength' => '100']) }}
									{{ App\Helper::error($errors, ['email']) }}
								</td>
							</tr>
							<tr>
								<td><span>電話番号</span></td>
								<td>
									{{ Form::text('tel', null, ['maxlength' => '20']) }}
									{{ App\Helper::error($errors, ['tel']) }}
								</td>
							</tr>
							<tr>
								<td><span>パスワード</span></td>
								<td>
									{{ Form::password('password', ['maxlength' => '20']) }}
									{{ App\Helper::error($errors, ['password']) }}
								</td>
							</tr>
							<tr>
								<td><span>パスワードの確認</span></td>
								<td>
									{{ Form::password('password_confirmation', ['maxlength' => '20']) }}
									{{ App\Helper::error($errors, ['password_confirmation']) }}
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
