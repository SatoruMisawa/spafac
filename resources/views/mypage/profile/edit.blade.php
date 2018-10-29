@extends('mypage.layouts.master_pop')
@section('content')
<div id="mypage_contents">
	<div class="inner">
			@include('mypage.profile.sidebar')
		<div class="right_contents">
			<div class="form">
				<form>
					<table class="edit_form">
						<tr>
							<td><span class="required">必須</span><span class="item">名前</span></td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">メールアドレス</span><span class="lower">半角英数字</span></td>
							<td>
								<input type="email">
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">ニックネーム	</span></td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>
								<label class="fileup"><img src="<?php echo url('assets/mypage/img/file.png'); ?>" alt="">
								<input type="file">
								</label>
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">プロフィール</span><span class="lower">ゲストとしてのプロフィールを入力してください。</span></td>
							<td>
								<textarea></textarea>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="submit_button"><a href="">保存</a></div>
</div>
@stop
