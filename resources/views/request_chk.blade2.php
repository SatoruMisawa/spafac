@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/whats_about.css">
<section class="whats_about_page">

<div class="wrap">
        <div class="w-box_sub chk-box">
            <h2>予約リクエスト</h2>
            <p class="txtC">必要な情報を入力して「予約リクエスト送信する」ボタンを押してください。</p>
            <form action="/request_done">
            <ul class="chk-ul">
                <li>
                    <p class="bold"><span class="hisu">必須</span>利用用途の詳細</p>
                    <p>スペースオーナーにどのような用途で利用するのかを伝えましょう。できる限り詳細に伝えることで、予約リクエストの承認率がアップします。</p>
                    <textarea placeholder="ケーキの作り方や美味しいレシピを持ち寄るためのミーティングを講師を呼んで開きます。人数は大人10名ほどでキッチンを利用します。"></textarea>                
                </li>
                <li>
                <li>
                    <ul class="u-table">
                        <!-- <li>
                        <p class="bold"><span class="hisu">必須</span>利用目的</p>
                        <select>
	                        <option>パーティ</option>
	                        <option>カラオケ</option>
	                        <option>研修・講習会</option>
	                        <option>その他</option>
                        </select><em>▼</em>
                        </li> -->
                        <li>
                        <p class="bold"><span class="hisu">必須</span>利用区分</p>
                        <select>
	                        <option>個人利用</option>
	                        <option>法人利用</option>
                            <option>個人団体利用</option>
                            <option>法人団体利用</option>
                        </select><em>▼</em>
                        </li>
                        <li>
                        <p class="bold"><span class="hisu">必須</span>利用目的</p>
                        <textarea placeholder="10人"></textarea>
                        </li>
                    </ul>
                </li>
                <p class="bold"><span class="hisu">必須</span>支払い方法の選択</p>
                <p>
                スペースオーナーが予約リクエストを承認すると、指定されたお支払い方法で決済されます。（お支払いはリクエスト承認されるまで行われません）。詳しくは<a href="/flow_of_settlement" target="_blank">決済の流れ</a>をご覧ください。</p>
                <div class="payment">
                <p><label>クレジットカード：<input type="radio" name="payment" value="card"></label></p>
                    <p class="add_card"><a href="">＞ 新しいカードを追加</a></p>
                    <p><label>銀行振込<input type="radio" name="payment" value="combini"></label></p>
                </div>
                </li>
                <li>
                	<h3>スペースご利用料金　内訳</h3>
                    <ul class="pay-list">
                        <li><span>利用期間</span><span>2018/10/01 12:00-15:00</span></li>
                        <li><span>プラン料金</span><span>\5,000</span></li>
                        <li><span>食器（オプション料金）</span><span>\1000</span></li>
                        <li><span>電源コード（オプション料金）</span><span>-\400</span></li>
                        <li><span>システム手数料</span><span>\400</span></li>                       
                        <li><span>保険料</span><span>\400</span></li>
                        <li><span>消費税</span><span>\480</span></li>
                        <li><span>合計</span><span>\6,480</span></li>
                    </ul>                
                </li>
                <li>
                <p class="bold red" target="_blank">このプランは予約リクエスト送信後、スペースオーナーによって承認された後、請求が発生します。</p>
                <p>見積もりの発行は<a href="">こちら</a>、PDFにて保存してお使いいただけます。</p>
                <p class="indm">※キャンセルに関しましては、決済の流れの<a href="/flow_of_settlement" target="_blank">キャンセルの場合</a>をご確認ください。</p>
                <p class="indm">※予約リクエストを送信する前に<a href="/terms-of-service" target="_blank">利用規約</a>をお読みください。</p>
                <p class="indm">※予約送信後に予約内容の確認など、スペースオーナーとのやりとりが開始されます。</p>
                <p class="txtC"><input type="submit" name="request" value="予約リクエストを送信する" onClick="return chk('予約リクエストを')"></p>
                
                </li>
            </ul>
            </form>               
                <p class="txtC totop"><a href="/whats_about">もどる</a><a href="/">トップ</a></p>
            </div>
        </div>    
    
</div>

</section>

<script>
// onClick="return chk('予約リクエストへ進み');"
 	function chk(value){
			ans=confirm(value+"しますか？");
		switch(true){
			case ans==false:
			alert('キャンセルしました。');
			return false;
			break;
			case ans==true:
			break;
		}
	}
</script>
@stop
