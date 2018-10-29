

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">

<section class="party_page">
	<div class="party_page_mv areas">
    <div class="party_page_mv_box">
    <h1>エリアから探す</h1>
    <p>自分の思い描いたスペースを関西地域の人気エリアやスポットエリアを検索・登録して利用してみましょう。<br>
思いがけないスペースと巡り会えるかもしれません。<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！<br>
地図から直接検索もできます。設備も充実。予約カレンダーツールで空いている日を検索。<br>
スマホやパソコンでいつでもどこでもすぐに予約できます。<br>
使い方は様々です。気に入ったスペースを見つけて今すぐ活用しよう！</p>
    </div>
    
    
    </div>
    
    
        <?php echo $__env->make('mid-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <div class="party_search_list table_list bgcg">
<div class="wrap">

<?php echo $__env->make('areas_table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

    </div>



</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts2.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>