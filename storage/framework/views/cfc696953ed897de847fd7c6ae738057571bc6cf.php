

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" type="text/css" href="/assets/css/guide.css">
<section id="guide_page">
	<div class="wrap">
		<h1 class="entry-title">ご利用方法について</h1>
		<div class="guide-bg">
			<h2 class="g-red sp" id="user">スペースを利用する方<a href="#owner">▼スペースを貸す方はこちら</a></h2>
			<em class="step sp">Step.1</em>
			<p><b>会員登録</b><br>
				スペースを使う方も貸す方も会員登録が必要です。本人確認書類を提出いただきます。<br>
				スペースを使う方は出店書類が必要な場合があります。
			</p>
			<ul class="left-box">
				<li>
					<em class="step sp">Step.2</em>
					<p>
						<b>プロフィール登録</b><br>販売する商品や提供サービスの詳細などを登録します。プロフィール登録後、スペースオーナーにて審査があります。審査完了後から予約ができるようになります。
					</p>
				</li>
				<li>
					<em class="step sp">Step.3</em>
					<p><b>スペースの検索</b><br>
						借りたい条件のスペースを検索します。キーワードや色々な検索方法を探してみよう。<br>
						<b>スペース予約</b><br>
						希望するスペースと日にちを選んで申し込みます。利用目的と方法を確認して予約のリクエストを送信しよう。
					</p>
				</li>
				<li>
					<em class="step sp">Step.4</em>
					<p><b>お支払い</b><br>
						借主から予約の承認がおりたら３日以内にお支払いいただきます。支払いが完了した時点で予約が確定します。
					</p>
				</li>
				<li>
					<em class="step sp">Step.5</em>
					<p><b>連絡先の開示</b><br>
						予約が確定するとご利用者のニックネームと当日の連絡先が借主に開示されます。鍵の受け渡し方法や利往上において確認事項をチャックしましょう。
					</p>
				</li>
			</ul>
			<h2 class="g-blue sp" id="owner">スペースを貸す方<a href="#user">▲スペースを利用する方はこちら</a></h2>
			<ul class="right-box">
				<li class="sp">
					<em class="step sp">Step.1</em>
					<p><b>会員登録</b><br>
						スペースを使う方も貸す方も会員登録が必要です。本人確認書類を提出いただきます。<br>
						スペースを使う方は出店書類が必要な場合があります。
					</p>
				</li>
				<li>
					<em class="step sp">Step.2</em>
					<p><b>スペース登録</b><br>
						貸したいスペースがあったらWENから登録。ご登録後、スペースファクトリーにてスペースの審査があります。（5～7営業日内）審査完了後、スペースの利用者募集が開始されます。
					</p>
				</li>
				<li>
					<em class="step sp">Step.3</em>
					<p><b>予約の審査</b><br>
						新しい予約が入ったら内容・日にちを確認し、空室の確認を行い予約リクエストに対して承認／否認の回答をしましょう。確認したいことがあればメッセージ機能を利用して確認しましょう。
					</p>
				</li>
				<li>
					<em class="step sp">Step.4</em>
					<p><b>連絡先と詳細情報の開示</b><br>
						予約が確定すると貸主のニックネームと当日の連絡先、スペースの詳細情報（鍵の受け渡し方法など）が利用者に開示されます。
					<p>
				</li>
				<li>
					<em class="step sp">Step.5</em>
					<p><b>スペース利用料のお支払い</b><br>
						スペース利用月末〆、翌月末〆、翌月末時にシステム手数料を差し引いてお振込みいたします。利用明細はマイページから随時ご確認できます。
					</p>
				</li>
			</ul>
			<p class="readme">※サイト内以外でのやりとりにて行う同スペースの契約を直接行うことは固く禁じております。又その再に保険の適用や一切の<br>トラブルについてスペースファクトリーは責任を負いません。又、直接契約が発覚した場合は、別途違約金を請求いたします。</p>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts2.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>