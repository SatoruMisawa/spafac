@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/whats_about.css">
<section class="whats_about_page">

<div class="wrap">
        <div class="w-box_sub done-box">
        <img src="{{ asset('assets/images/icon_lightbulb.png') }}" alt="電球アイコン"">
        <div class="done">
            <h2>予約リクエスト完了！！</h2>        
                <h3>予約リクエストありがとうございます。<br>ご登録いただいたメールアドレスにご予約内容をお送り致します。<br>スペースオーナー様からの利用承認を今しばらくお待ちください。<br>スペースオーナー様との事前の確認はマイページのメッセージ機能にて行うことができます。</h3>
                <p><a href="/" class="judging_button">TOPに戻る</a></p>
                </div>
        </div>    
    
</div>

</section>
@stop
