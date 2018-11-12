@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/help.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
                
<div class="layout">
    <main role="main">
        <div class="container">
            <div class="container-inner">
                <div class="row clearfix">
                    <div class="column column--sm-8">
                        <ol class="breadcrumbs">
                            <li title="SPACE FACTORYヘルプセンター">
                                <a href="/hc/ja">SPACE FACTORYヘルプセンター</a>
                            </li>
                            <li title="ゲスト">
                                <a href="#">ゲスト</a>
                            </li>
                            <li title="アカウント登録・設定">
                                <a href="#">アカウント登録・設定</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="section"> 
                    <div class="page-header page-header--with-border">
                        <div class="section-header">
                            <div class="section-header__col section-header__col--main">
                                <h1 class="section-title">アカウント登録・設定</h1>
                            </div>
                        </div>
                    </div>
                    <ul class="article-list">
                        <li><a href="#">電話番号認証について</a></li>
                        <li><a href="#">メールアドレスを変更する</a></li>
                        <li><a href="#">ログイン方法</a></li>
                        <li><a href="#">ゲストアカウント登録方法</a></li>
                        <li><a href="#">パスワードを変更したい</a></li>
                        <li><a href="#">登録中の住所や電話番号を変更したい</a></li>
                        <li><a href="#">支払いに使うカードの登録・削除</a></li>
                        <li><a href="#">メール・通知の受信設定方法 &lt;ゲスト&gt;</a></li>
                        <li><a href="#">法人アカウント(法人のお客様向け)</a></li>
                        <li><a href="#">未成年のゲスト登録について</a></li>
                        <li><a href="#">スペースマーケットの退会方法</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</div>
<script>
</article>
$(function() {
	$(".tab-ck label").on("click", function() {
		$(".tab-ck label").toggleClass("active");
	});
});
</script>
@stop
