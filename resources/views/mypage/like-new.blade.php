@extends('mypage.layouts.master_pop')
@section('content')
<div id="mypage_contents">
	<div class="inner box">
		<h2>お気に入りリスト作成</h2>
		<span>お気に入りリスト名を入力してください。</span>
		<div class="make_like_box">
			<form>
				<input type="text">
				<button type="button"><span>リストの作成</span></button>
			</form>
		</div>
        <p class="txtC"><a href="/mypage/like">&lt;&lt;&nbsp;もどる</a></p>
	</div>
</div>

@stop
