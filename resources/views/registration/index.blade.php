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
					<?php echo Form::open(array('id' => 'form', 'action' => array('RegistrationController@confirm'), 'class' => 'h-adr')); ?>
						<input type="hidden" class="p-country-name" value="Japan">
						<table class="form__table01">
							<tr>
								<td><span>ニックネーム</span></td>
								<td>
									<?php echo Form::text('nickname', null, ['maxlength' => '20']); ?>
									<?php echo App\Helper::error($errors, ['nickname']); ?>
								</td>
							</tr>
							<tr>
								<td><span>パスワード</span></td>
								<td>
									<?php echo Form::password('password', ['maxlength' => '20']); ?>
									<?php echo App\Helper::error($errors, ['password']); ?>
								</td>
							</tr>
							<tr>
								<td><span>パスワードの確認</span></td>
								<td>
									<?php echo Form::password('password_confirmation', ['maxlength' => '20']); ?>
									<?php echo App\Helper::error($errors, ['password_confirmation']); ?>
								</td>
							</tr>
							<tr>
								<td><span>姓名</span></td>
								<td>
									<?php echo Form::text('name', null, ['maxlength' => '20']); ?>
									<?php echo App\Helper::error($errors, ['name']); ?>
								</td>
							</tr>
							<tr>
								<td><span>メールアドレス</span><br /><i>（メールアドレスがログインID）</i></td>
								<td>
									<?php echo Form::text('email', null, ['maxlength' => '100']); ?>
									<?php echo App\Helper::error($errors, ['email']); ?>
								</td>
							</tr>
							<tr>
								<td><span>電話番号</span></td>
								<td>
									<?php echo Form::text('tel', null, ['maxlength' => '20']); ?>
									<?php echo App\Helper::error($errors, ['tel']); ?>
								</td>
							</tr>
							<tr>
								<td><span>郵便番号</span></td>
								<td>
									<?php echo Form::text('zip', null, ['class' => 'p-postal-code', 'maxlength' => '7']); ?>
									<?php echo App\Helper::error($errors, ['zip']); ?>
								</td>
							</tr>
							<tr>
								<td><span>都道府県</span></td>
								<td>
									<?php echo Form::select('prefecture_id', ['' => '選択してください'] + $prefectureList, null, ['class' => 'p-region-id']); ?>
								</td>
							</tr>
							<tr>
								<td><span>市区町村</span></td>
								<td>
									<?php echo Form::text('address1', null, ['class' => 'p-locality', 'maxlength' => '100']); ?>
									<?php echo App\Helper::error($errors, ['address1']); ?>
								</td>
							</tr>
							<tr>
								<td><span>町名・番地</span></td>
								<td>
									<?php echo Form::text('address2', null, ['class' => 'p-street-address', 'maxlength' => '100']); ?>
									<?php echo App\Helper::error($errors, ['address2']); ?>
								</td>
							</tr>
							<tr>
								<td><span>ビル名・部屋番号</span></td>
								<td>
									<?php echo Form::text('address3', null, ['class' => 'p-extended-address', 'maxlength' => '100']); ?>
									<?php echo App\Helper::error($errors, ['address3']); ?>
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
