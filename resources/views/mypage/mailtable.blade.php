@extends('mypage.layouts.master_pop')
@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/mypage/mail-list.css">
<div id="mypage_contents">
	<div class="inner mail-list wrap">
    <h2><svg version="1.1" id="email" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="30px" height="30px" viewBox="615 615 50 50" enable-background="new 615 615 30 30" xml:space="preserve">
	<path fill="#FFFFFF" d="M650.064,644.009c-2.201,1.733-5.892,5.389-10.063,5.366c-4.192,0.022-7.93-3.687-10.064-5.367
		c-4.837-3.787-8.01-6.288-10.248-8.07v18.125h40.625v-18.125C658.074,637.72,654.901,640.222,650.064,644.009z"/>
	<path fill="#FFFFFF" d="M619.688,629.922c2.19,1.783,5.682,4.557,13.143,10.399c1.644,1.293,4.903,4.402,7.169,4.366
		c2.267,0.035,5.524-3.072,7.169-4.366c7.463-5.844,10.954-8.616,13.144-10.399v-3.985h-40.625V629.922z"/>
	<path fill="#9E9E9E" d="M660.313,621.25h-40.625c-2.589,0-4.688,2.099-4.688,4.688v28.125c0,2.589,2.099,4.688,4.688,4.688h40.625
		c2.589,0,4.688-2.099,4.688-4.688v-28.125C665,623.349,662.902,621.25,660.313,621.25z M619.688,654.063v-18.125
		c2.238,1.782,5.411,4.283,10.248,8.07c2.134,1.681,5.872,5.39,10.064,5.367c4.172,0.022,7.862-3.633,10.063-5.366
		c4.837-3.787,8.011-6.289,10.249-8.071v18.125H619.688z M660.313,629.922c-2.189,1.783-5.681,4.556-13.144,10.399
		c-1.645,1.293-4.902,4.401-7.169,4.366c-2.267,0.036-5.525-3.072-7.169-4.366c-7.461-5.843-10.953-8.616-13.143-10.399v-3.985
		h40.625V629.922z"/>
</svg>メール受信内容</h2>
    <p>以下メールが届いております。内容を見るには件名をクリックしてください。</p>

    <ul class="m-list-box">
            @isset($mailtable[0]->content)
                @foreach ($mailtable as $maillist_this)
                    <li>
                      <p class="m-title"><span>件名：</span><span>受信日時：{{$maillist_this->send_date}}</span></label></p><input type="checkbox" >
                      <ul >
                        <li><strong>姓名：{{$name}}</strong>様</li>
                        <li><strong>内容：</strong>
                        <div class="m-contents">
                        {!!nl2br($maillist_this->content)!!}
                        </div>
                        </li>
                      </ul>

                    </li>
                @endforeach
            @else
            	<li><h3>現在メールは届いていません。</h3></li>
            @endif
						<br><br><br><br>
						<ul class="">
								<li><strong>メールフォーム：</strong>
								<?php echo Form::open(array('action' => array('Mypage\IndexController@sendmail', $id), 'class' => 'h-adr')); ?>
								<div class="m-contents">
								<?php echo Form::text('zip', null, ['class' => 'form-control p-postal-code', 'maxlength' => '7', 'placeholder' => '件名']); ?><br>
								<?php echo Form::textarea('content', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'メッセージを入れてください。']); ?>
								<input type="hidden" name="send_to" value="{{ $id }}"></input>

								<div class="box-footer">
									<button type="submit" class="btn btn-success pull-right">メールを送信する</button>
								</div>
								<?php echo Form::close(); ?>

								</div>
								</li>
						</ul>
    </ul>

    <p class="pager"><a href="">＜＜前へ</a><a href="">次へ＞＞</a></p>

	</div>
</div>
@stop
