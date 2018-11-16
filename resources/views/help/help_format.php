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
                
<main role="main">
    <div class="container">
        <div class="container-inner">
            <div class="row clearfix">
                <div class="column column--sm-8">
                    <ol class="breadcrumbs">
                        <li title="SPACE FACTORYヘルプセンター">
                            <a href="/#">SPACE FACTORYヘルプセンター</a>
                        </li>
                        <li title="ゲスト">
                            <a href="/#">ゲスト</a>
                        </li>
                        <li title="アカウント登録・設定">
                            <a href="/#">アカウント登録・設定</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row clearfix">
                <div class="column column--sm-8 ">
                    <article class="article clearfix">
                    <div class="article-header">
                        <h1 class="help_h1">電話番号認証について</h1>
                    </div>
                    <div class="article__body markdown" itemprop="articleBody">
                        <p>スペースマーケットでは、ゲストの皆様に携帯電話番号の認証をお願いしております。</p>
                        &nbsp;
                        <p>健全なプラットフォームを運営するためにも、お手数ではございますがご協力をお願いいたします。</p>
                        &nbsp;
                        <p>※タブレット（iPadなど）を利用している場合、お使いの携帯電話に送信して認証することもできます</p>
                        &nbsp;
                        <p>電話番号についての詳しい設定方法は <a href="#" target="_blank" rel="noopener">こちら</a> を御覧ください。</p>
                    </div>
                    </article>
                </div>
                <aside class="column column--sm-4 article-sidebar sidebar-column">
                    <section class="section-articles">
                        <h3 class="section-articles__pagetitle">アカウント登録・設定</h3>
                        <ul class="section-articles__subtitle">
                            <li class="section-articles__sub-title-item is-active"><a href="#">電話番号認証について</a></li>
                            <li class="section-articles__sub-title-item "><a href="#">メールアドレスを変更する</a></li>
                            <li class="section-articles__sub-title-item "><a href="#">ログイン方法</a></li>
                            <li class="section-articles__sub-title-item "><a href="#">ゲストアカウント登録方法</a></li>
                            <li class="section-articles__sub-title-item "><a href="#">パスワードを変更したい</a></li>
                            <li class="section-articles__sub-title-item "><a href="#">登録中の住所や電話番号を変更したい</a></li>
                            <li class="section-articles__sub-title-item "><a href="#">支払いに使うカードの登録・削除</a></li>
                            <li class="section-articles__sub-title-item "><a href="#">メール・通知の受信設定方法 &lt;ゲスト&gt;</a></li>
                            <li class="section-articles__sub-title-item "><a href="#">法人アカウント(法人のお客様向け)</a></li>
                            <li class="section-articles__sub-title-item "><a href="#">未成年のゲスト登録について</a></li>
                        </ul>
                </section>
            </aside>
            </div>
        </div>
    </div>
</main>
<script>
</article>
$(function() {
	$(".tab-ck label").on("click", function() {
		$(".tab-ck label").toggleClass("active");
	});
});
</script>
@stop
