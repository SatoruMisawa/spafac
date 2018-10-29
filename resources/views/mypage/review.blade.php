@extends('mypage.layouts.master_pop')
@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/mypage/index.css">

<div class="review review2" id="mypage_contents">
	<div class="inner box">
	    <h2>レビュー覧</h2>
		<div class="review_box">
			<div class="profile">
				<div class="left"><img src="<?php echo url('assets/mypage/img/avatar.jpg'); ?>" alt=""><span>oimosan</span></div>
				<div class="right">
                <form action="">
                	<div class="review-chk">
                        <p class="bold">スペースオーナーからのレビュー：（件名）ＸＸＸＸＸＸＸＸＸＸＸ</p>
                        <div class="owner_review">
                       		<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキスト</p>                            
                        </div>
                        <div class="star"><span class="bold">星をつける：</span>
                        <input type="radio" name="star[1]" id="star1[1]" value="1" checked><label for="star1[1]">１個</label>
                        <input type="radio" name="star[1]" id="star2[1]" value="2"><label for="star2[1]">２個</label>
                        <input type="radio" name="star[1]" id="star3[1]" value="3"><label for="star3[1]">３個</label>
                        <input type="radio" name="star[1]" id="star4[1]" value="4"><label for="star4[1]">４個</label>
                        <input type="radio" name="star[1]" id="star5[1]" value="5"><label for="star5[1]">５個</label>
                       </div>
                        <div class="reply"><span class="bold">返信コメント：</span><textarea name="reply[1]"></textarea><input type="submit" name="reply_on[1]" value="返信する" onClick="return chk('このレビューに返信しますか？')"></div>
                    </div>

                	<div class="review-chk">
                        <p class="bold">スペースオーナーからのレビュー：（件名）ＸＸＸＸＸＸＸＸＸＸＸ</p>
                        <div class="owner_review">
                       		<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキスト</p>                            
                        </div>
                        <div class="star"><span class="bold">星をつける：</span>
                        <input type="radio" name="star[2]" id="star1[2]" value="1" checked><label for="star1[2]">１個</label>
                        <input type="radio" name="star[2]" id="star2[2]" value="2"><label for="star2[2]">２個</label>
                        <input type="radio" name="star[2]" id="star3[2]" value="3"><label for="star3[2]">３個</label>
                        <input type="radio" name="star[2]" id="star4[2]" value="4"><label for="star4[2]">４個</label>
                        <input type="radio" name="star[2]" id="star5[2]" value="5"><label for="star5[2]">５個</label>
                       </div>
                        <div class="reply"><span class="bold">返信コメント：</span><textarea name="reply[2]"></textarea><input type="submit" name="reply_on[2]" value="返信する" onClick="return chk('このレビューに返信しますか？')"></div>
                    </div>

                	<div class="review-chk">
                        <p class="bold">スペースオーナーからのレビュー：（件名）ＸＸＸＸＸＸＸＸＸＸＸ</p>
                        <div class="owner_review">
                       		<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキスト</p>                            
                        </div>
                        <div class="star"><span class="bold">星をつける：</span>
                        <input type="radio" name="star[3]" id="star1[3]" value="1" checked><label for="star1[3]">１個</label>
                        <input type="radio" name="star[3]" id="star2[3]" value="2"><label for="star2[3]">２個</label>
                        <input type="radio" name="star[3]" id="star3[3]" value="3"><label for="star3[3]">３個</label>
                        <input type="radio" name="star[3]" id="star4[3]" value="4"><label for="star4[3]">４個</label>
                        <input type="radio" name="star[3]" id="star5[3]" value="5"><label for="star5[3]">５個</label>
                       </div>
                        <div class="reply"><span class="bold">返信コメント：</span><textarea name="reply[3]"></textarea><input type="submit" name="reply_on[3]" value="返信する" onClick="return chk('このレビューに返信しますか？')"></div>
                    </div>
                    
				</form>

                        <div class="search_reslut">
                            <p class="bold">検索結果 XXX件</p>
                        </div>
                 <div class="pager"><a>＜＜　前</a><a>次　＞＞</a></div>                        
				</div>               
                

			</div>
		</div>
	</div>
</div>
<script>
 	function chk(value){
			ans=confirm(value);
		switch(true){
			case ans==false:
			return false;
			alert('キャンセルしました');
			break;
			case ans==true:
			break;
		  }
	}
</script>


@stop
