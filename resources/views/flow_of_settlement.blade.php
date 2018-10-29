@extends('layouts2.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/commercial-transaction-law.css">
<link rel="stylesheet" type="text/css" href="/assets/css/flow_of_settlement.css">

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="wrap site-main">
			<article id="post-61" class="post-61 page type-page status-publish hentry">
				<header class="entry-header">
					<h1 class="entry-title">決済のながれ</h1>
				</header>
				<!-- .entry-header -->
				<div class="entry-content">
                
<h2>予約リクエストからお支払いまで</h2>

<ul class="flow-list">
<li>
<h3>利用者からの予約リクエスト</h3>
<p>
利用者が予約のリクエストを送信します。
</p>
</li>


<li>
<h3>スペースオーナー（提供者）が予約の内容を確認</h3>
</li>

<li>
<h3>スペースオーナー（提供者）が承認を行う</h3>
<p>（仮予約成立）</p>
</li>

<li>
<h3>承認・決済</h3>
<p class="txtL">
予約承認が下りてから３日以内（銀行営業時間外については翌営業日まで）にお支払い方法（クレジットカード決済、または銀行振込）を選択し、予約の確定を行います。
</p>
<p class="indm txtL">
※実際のお支払いは予約リクエストがスペースオーナー（提供者）の仮承認がされるまで行われません。お支払いが終わりましたら予約確定となります。
</p>
</li>


<li>
<h3>当日スペースの貸し出し</h3>
<p class="txtL">
予約日にスペースオーナー（提供者）がスペースを利用者に貸し出しします。
</p>
</li>


<li>
スペースオーナー（提供者）はスペース利用料のお受け取り
</li>

</ul>


<div class="payout">
<h2>ご利用者お支払い方法</h2>

<h3>クレジットカードの場合</h3>
<p>利用日の約14日後に指定の口座にお振込みします。</p>

<h3>銀行振込の場合</h3>
<p>当月1日～31日までのご利用期間にご利用頂きました利用料を翌月末に指定の口座にお振込みします。</p>

</div>


<div class="cancel">
<h2>キャンセルの場合</h2>

<h3>キャンセル料 キャンセルしたスペースの利用料金の総額</h3>
<p class="bold">スペース利用者によるキャンセル料</p>
<p class="indm">・　予約確定前（銀行振込前/クレジットカード決済前）　無料</p>
<p class="indm">・　予約確定からご利用日の31日前まで　20%</p>
<p class="indm">・　ご利用日の30日前～15日前まで　30%</p>
<p class="indm">・　ご利用日の14日前～8日前まで　40%</p>
<p class="indm">・　ご利用日の7日前～当日まで、100%</p>
<p class="indm">※お客様都合でのキャンセルの場合、ご返金の銀行振込手数料はお客様負担になります。</p>

<h3>スペースオーナー（提供者）によるキャンセル料</h3>
<p>スペースの利用料金の総額よりご返金の銀行振込手数料等が含まれます。</p>
<p>クレジット決済のキャンセルについては、返金時期はご利用のカードにより異なります。詳細はカードの発行会社へお問い合わせください。</p>
<p class="indm">※キャンセルや期限切れなど、予約が承認されなかった場合には、ご利用料金が払い戻しされます。</p>
</div>



				</div>
				<!-- .entry-content -->
			</article>
			<!-- #post-61 -->
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
</div>
@stop
