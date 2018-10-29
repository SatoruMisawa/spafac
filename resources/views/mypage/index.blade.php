@extends('mypage.layouts.master_pop')
@section('content')
<div id="mypage_contents">
	<div class="inner box">

		<div class="mypage">
			<div class="avatar">
            <img src="<?php echo url('assets/mypage/img/avatar.jpg'); ?>" alt=""><span><?php echo e($loginUser->name); ?></span>
            </div>
			<div class="link_box">
				<a href="<?php echo url('mypage/profile'); ?>">プロフィールを表示</a>
				<a href="<?php echo url('mypage/profile/edit-account'); ?>">プロフィールを編集</a>
			</div>
			<h2 class="mypage_title_h2">ヘルプ</h2>
			<h3 class="mypage_title_h3">予約について</h3>
			<div class="link_box">
				<a href="javascript:void(0)" onclick="opener.location.href='/help/';">予約の変更方法</a>
				<a href="javascript:void(0)" onclick="opener.location.href='/help/';">予約のキャンセル方法とキャンセル料の種別について</a>
				<a href="javascript:void(0)" onclick="opener.location.href='/help/';">当日の流れ</a>
			</div>
			<h3 class="mypage_title_h3">決済について</h3>
			<div class="link_box"><a href="javascript:void(0)" onclick="opener.location.href='/help/';">決済について詳しく知りたい</a></div>
		</div>
		<div class="mypage-index-rightbox">

        
        
        <h3>やることリスト</h3>
        <ul>
            @if(count($todo) > 0)
                @foreach ($todo as $todo_this)                
                <li><a href="?id={{$todo_this['id']}}">{{$todo_this['title']}}</a><span>{{$todo_this['date']}}</</span></li>
                @endforeach
            @else
            	<li>現在やることリストはありません。</li>        
            @endif
        </ul>

        <h3>未返信のメッセージ</h3>
        <ul>
            @if(count($remess) > 0)
                @foreach ($remess as $remess_this)                
                <li><a href="/mypage/mail-list?id={{$remess_this['id']}}">{{$remess_this['title']}}</a><span>{{$remess_this['date']}}</</span></li>
                @endforeach
            @else
            	<li>未返信のメッセージはありません。</li>        
            @endif
        </ul>

        <h3>未完了の予約リクエスト</h3>
        <ul>
            @if(count($rerec) > 0)
                @foreach ($rerec as $rerec_this)                
                <li><a href="?id={{$rerec_this['id']}}">{{$rerec_this['title']}}</a><span>{{$rerec_this['date']}}</</span></li>
                @endforeach
            @else
		        <li>未完了の予約リクエストはありません。</li>
		    @endif
        </ul>

        <h3>予約完了</h3>
        <ul>
            @if(count($redone) > 0)
                @foreach ($redone as $redone_this)                
                <li><a href="?id={{$redone_this['id']}}">{{$redone_this['title']}}</a><span>{{$redone_this['date']}}</</span></li>
                @endforeach
            @else
		        <li>予約はありません。</li>
		    @endif
        </ul>

			<p>お問い合わせは<a href="tomail:info@spafac.com">info@spafac.com</a>まで。</p>
		</div>
	</div>
</div>
@stop
