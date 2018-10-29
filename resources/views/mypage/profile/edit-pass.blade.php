@extends('mypage.layouts.master_pop')

@section('content')
<div id="mypage_contents">
	<div class="inner">
			@include('mypage.profile.sidebar')
		<div class="right_contents">
			<div class="form">
				<table>
					<tr>
						<td><span class="any">任意</span><span class="item">パスワードの変更</span><span class="lower">パスワードを変更できます。現在のパスワードと新しいパスワードを入力してください。</span></td>
					</tr>
				</table>
				<table class="pass">
					<tr>
						<td>現在のパスワード</td>
						<td>
							<input type="text">
						</td>
					</tr>
					<tr>
						<td>新しいパスワード</td>
						<td>
							<input type="text">
						</td>
					</tr>
					<tr>
						<td>新しいパスワード（確認）</td>
						<td>
							<input type="text">
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="submit_button"><a href="">保存</a></div>
</div>
@stop
