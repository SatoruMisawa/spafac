@extends('layouts2.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/help.css">
			<article id="sp-help">
				<header>
                    <div class="wrap">
                        <h1 class="help-title">お困りですか？ヘルプ検索</h1>
                        <form>
                        <input type="text" placeholder="例）パスワードの変更"><input type="submit" value="検索">
                        </form>
                    </div>    
				</header>
				<div class="wrap">

				<div class="contents">
                
                    <ul class="tab-ck">
                    <li>
                    <label for="sp-user" class="active">スペースご利用者様ヘルプ</label>
                    </li>
                    <li>
                    <label for="sp-owner">スペースオーナー様ヘルプ</label>                
                    </li>
                    </ul>
                <input type="radio" name="help-ck" class="help-ck" checked id="sp-user">
                <div class="help-bt-box">
                
                <ul>
                <li><a href="/help/user01"><img src="/assets/images/help/question-circle-regular.svg"><br>アカウント登録・設定</a></li>
                <li><a href="/help/user02"><img src="/assets/images/help/question-circle-regular.svg"><br>スペースを探す</a></li>
                <li><a href="/help/user03"><img src="/assets/images/help/question-circle-regular.svg"><br>スペースを予約する</a></li>
                <li><a href="/help/user04"><img src="/assets/images/help/question-circle-regular.svg"><br>決済方法</a></li>
                <li><a href="/help/user05"><img src="/assets/images/help/question-circle-regular.svg"><br>予約キャンセル</a></li>
                <li><a href="/help/user06"><img src="/assets/images/help/question-circle-regular.svg"><br>スペース利用中・利用後</a></li>
                </ul> 
                
                </div>
                <input type="radio" name="help-ck" class="help-ck" id="sp-owner">
				<div class="help-bt-box">

                <ul>
                <li><a href="/help/owner01"><img src="/assets/images/help/question-circle-solid.svg"><br>スペース掲載について</a></li>
                <li><a href="/help/owner02"><img src="/assets/images/help/question-circle-solid.svg"><br>お問い合わせへの対応</a></li>
                <li><a href="/help/owner03"><img src="/assets/images/help/question-circle-solid.svg"><br>予約リクエストへの対応</a></li>
                <li><a href="/help/owner04"><img src="/assets/images/help/question-circle-solid.svg"><br>スペースの管理</a></li>
                <li><a href="/help/owner05"><img src="/assets/images/help/question-circle-solid.svg"><br>スペース貸出中・貸出後</a></li>
                <li><a href="/help/owner06"><img src="/assets/images/help/question-circle-solid.svg"><br>売上の受取方法</a></li>
                </ul> 

                </div>

            <p class="more-help">さらにヘルプが必要ですか？<a href="/inquiry">お問い合わせ</a></p>    

				</div>
                </div>
			</article>
<script>
$(function() {
	$(".tab-ck label").on("click", function() {
		$(".tab-ck label").toggleClass("active");
	});
});
</script>
@stop
