@extends('mypage.layouts.master_pop')
@section('content')


<div class="content">
	<div class="inner">

		<div class="picture">
			<div class="ttl">
				<h2>ダッシュボード</h2>
			</div>
			<div class="photos"><div class="avatar">
            <img src="{{ asset('/img/default_profile_image.jpg') }}" alt="" /><span></span>
							<div class="name"> <a>{{ Auth::user()->name }}</a> </div>
      </div>


			</div>
			<div class="infobox">
				<div class="ttl">
					<h3>ヘルプ</h3>
				</div>
				<div class="infoTxt">
					<h4>予約について</h4>
					<ul>
						<li><a href="#">テキストサンプル</a></li>
						<li><a href="#">テキストサンプル</a></li>
						<li><a href="#">テキストサンプル</a></li>
						<li><a href="#">テキストサンプル</a></li>
					</ul>
					<h4>決済について</h4>
					<ul>
						<li><a href="#">テキストサンプル</a></li>
					</ul>
				</div>
			</div>

			<!--<div class="avatar">
            <img src="<?php //echo url('assets/mypage/img/avatar.jpg'); ?>" alt=""><span></span>
            </div>
			<div class="link_box">
				<a href="<?php //echo url('mypage/profile'); ?>">プロフィールを表示</a>
				<a href="<?php //echo url('mypage/profile/edit-account'); ?>">プロフィールを編集</a>
			</div>
			<h2 class="mypage_title_h2">ヘルプ</h2>
			<h3 class="mypage_title_h3">予約について</h3>
			<div class="link_box">
				<a href="javascript:void(0)" onclick="opener.location.href='/help/';">予約の変更方法</a>
				<a href="javascript:void(0)" onclick="opener.location.href='/help/';">予約のキャンセル方法とキャンセル料の種別について</a>
				<a href="javascript:void(0)" onclick="opener.location.href='/help/';">当日の流れ</a>
			</div>
			<h3 class="mypage_title_h3">決済について</h3>
			<div class="link_box"><a href="javascript:void(0)" onclick="opener.location.href='/help/';">決済について詳しく知りたい</a></div>-->
		</div>


		<div class="news">

			<div class="infobox">
				<div class="ttl">
					<h3>やることリスト</h3>
				</div>
				<div class="infoTxt">
	        <ul>
	            @if(count($todo) > 0)
	                @foreach ($todo as $todo_this)
	                <li><a href="?id={{$todo_this['id']}}">{{$todo_this['title']}}</a><span>{{$todo_this['date']}}</</span></li>
	                @endforeach
	            @else
	            	<li>現在やることリストはありません。</li>
	            @endif
	        </ul>
				</div>
			</div>
			<div class="infobox">
					<div class="ttl">
						<h3>未読の新着メッセージ</h3>
					</div>
					<div class="infoTxt">
		        <ul>
		            @if(count($maillist) > 0)
										@foreach ($maillist as $maillist_this)
												<li>
													<a href="{{ route('mailtable', $maillist_this['id']) }}">

													<ul class="m-list-box-ce">
														<li><strong>姓名：</strong>{{$maillist_this['name']}}様</li>
														<li><strong>内容：</strong>
														<div class="m-contents">
														{!!nl2br($maillist_this['content']->content)!!}
														</div>
														</li>
													</ul>
												</a>
												</li>
										@endforeach

		            @else
		            	<li>未返信のメッセージはありません。</li>
		            @endif
		        </ul>
					</div>
				</div>

				<div class="infobox">
					<div class="ttl">
						<h3>未完了の予約リクエスト</h3>
					</div>
					<div class="infoTxt">
		        <ul>
		            @if(count($rerec) > 0)
		                @foreach ($rerec as $rerec_this)
		                <li><a href="?id={{$rerec_this['id']}}">{{$rerec_this['title']}}</a><span>{{$rerec_this['date']}}</</span></li>
		                @endforeach
		            @else
				        <li>未完了の予約リクエストはありません。</li>
				    @endif
		        </ul>
					</div>
			</div>
			<div class="infobox">
					<div class="ttl">
						<h3>予約完了</h3>
					</div>
					<div class="infoTxt">
		        <ul>
		            @if(count($redone) > 0)
		                @foreach ($redone as $redone_this)
		                <li><a href="?id={{$redone_this['id']}}">{{$redone_this['title']}}</a><span>{{$redone_this['date']}}</</span></li>
		                @endforeach
		            @else
				        <li>予約はありません。</li>
				    @endif
		        </ul>
				</div>
			</div>
			<p>お問い合わせは<a href="tomail:info@spafac.com">info@spafac.com</a>まで。</p>
		</div>

	</div>
</div>
@stop
