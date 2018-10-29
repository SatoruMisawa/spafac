
<?php $__env->startSection('content'); ?>
<label class="search-icon" for="search-ck">
<svg version="1.1" id="search-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="40px" height="40px" viewBox="620 620 40 40" enable-background="new 620 620 40 40" xml:space="preserve">
<path fill="#9E9E9E" d="M659.453,654.582l-7.789-7.787c-0.352-0.352-0.828-0.547-1.327-0.547h-1.273
	c2.155-2.758,3.437-6.227,3.437-10c0-8.976-7.272-16.249-16.248-16.249s-16.249,7.272-16.249,16.249s7.273,16.249,16.249,16.249
	c3.772,0,7.241-1.281,9.999-3.438v1.273c0,0.5,0.195,0.977,0.547,1.328l7.788,7.788c0.734,0.734,1.922,0.734,2.648,0l2.211-2.211
	C660.18,656.504,660.18,655.316,659.453,654.582z M636.252,646.248c-5.523,0-9.999-4.469-9.999-10c0-5.523,4.468-9.999,9.999-9.999
	c5.522,0,9.999,4.468,9.999,9.999C646.251,641.771,641.782,646.248,636.252,646.248z"/>
</svg>
</label>
<div id="m_search">
    <p class="close"><span>×</span></p>
	<div class="m_search_form">
    		<form>
			<span>ステータス</span>
			<select>
				<option value="すべて">すべて</option>
			</select>
			<span>期間</span>
			<input type="text"><span class="fromto">〜</span>
			<input type="text"><span>フリーワード</span>
			<input type="text">
			<input type="submit">絞り込み</input>
			<input type="reset">
		</form>
	</div>
</div>
<div id="mypage_contents">
	<div class="inner box">
		<div id="manegement">
			<div class="m_title">
				<h2>予約一覧</h2>
				<span class="lower">左のリストから予約を選択して下さい。</span>
			</div>
			<div class="m_box"><span class="lower">予約はまだありません。</span></div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mypage.layouts.master_pop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>