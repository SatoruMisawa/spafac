@extends('mypage.layouts.master_pop')
@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/mypage/mail-list.css">
<div id="mypage_contents">
	<div class="inner mail-list wrap">

    <ul class="m-list-box">
            @isset($mailtable[0]->content)
                @foreach ($mailtable as $maillist_this)
                    <li>
                      <p class="m-title">{{$maillist_this->send_date}}</p>
                      <ul>
                        <li>{{$name}}</li>
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
								<li>
								<?php echo Form::open(array('action' => array('Mypage\IndexController@sendmail', $id), 'class' => 'h-adr')); ?>
								<div class="m-contents">
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



	</div>
</div>
@stop
