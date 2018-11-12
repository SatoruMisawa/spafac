@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/help.css">
			<article id="sp-help">
				<header>
                    <div class="wrap">
                        <h1 class="help-title">お困りですか？ヘルプ検索</h1>
                        <form>
                        <input class="searchbar999" type="text" placeholder="例）パスワードの変更">
                        <input class="searchbarbutton999" type="submit" value="検索">
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
                <li><a class="question_txst_a001" href="help_user"><img src="/assets/images/help/icon_user.png"><br>アカウント登録・設定</a></li>
                <li><a class="question_txst_a001" href="/help/user02"><img src="/assets/images/help/icon_search.png"><br>スペースを探す</a></li>
                <li><a class="question_txst_a001" href="/help/user03"><img src="/assets/images/help/icon_calendar.png"><br>スペースを予約する</a></li>
                <li><a class="question_txst_a001" href="/help/user04"><img src="/assets/images/help/icon_money.png"><br>決済方法</a></li>
                <li><a class="question_txst_a001" href="/help/user05"><img src="/assets/images/help/icon_cancel.png"><br>予約キャンセル</a></li>
                <li><a class="question_txst_a001" href="/help/user06"><img src="/assets/images/help/icon_usertime.png"><br>スペース利用中・利用後</a></li>
                <li><a class="question_txst_a001" href="/help/user06"><img src="/assets/images/help/icon_question.png"><br>よくある質問</a></li>
                </ul> 
                
                </div>
                <input type="radio" name="help-ck" class="help-ck" id="sp-owner">
				<div class="help-bt-box">

                <ul>
                <li><a class="question_txst_a001" href="/help/owner01"><img src="/assets/images/help/icon_registration.png"><br>アカウント管理</a></li>
                <li><a class="question_txst_a001" href="/help/owner02"><img src="/assets/images/help/icon_control.png"><br>スペースの管理</a></li>
                <li><a class="question_txst_a001" href="/help/owner03"><img src="/assets/images/help/icon_calendarcontrol.png"><br>カレンダーの管理</a></li>
                <li><a class="question_txst_a001" href="/help/owner04"><img src="/assets/images/help/icon_info.png"><br>問い合わせの管理</a></li>
                <li><a class="question_txst_a001" href="/help/owner05"><img src="/assets/images/help/icon_rental.png"><br>スペース貸出中・貸出後</a></li>
                <li><a class="question_txst_a001" href="/help/owner06"><img src="/assets/images/help/icon_money.png"><br>売上の受取方法</a></li>
                <li><a class="question_txst_a001" href="/help/user06"><img src="/assets/images/help/icon_question.png"><br>よくある質問</a></li>
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
