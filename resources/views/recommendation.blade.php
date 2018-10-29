@extends('layouts2.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">

<section class="party_page">
	<div class="party_page_mv amenities">
    <div class="party_page_mv_box">
    <h1>スタッフのイチオシスペース</h1>
    </div>
    </div>
    <nav class="party_search">
    <form action="/search" method="get">
    <div><input type="text" placeholder="目的" list="da_type"><i>▼</i>
<datalist id="da_type">
				<option value="物販　飲食販売">物販　飲食販売</option>
				<option value="催事　パーティ会場">催事　パーティ会場</option>
				<option value="オフィス　会議場">オフィス　会議場</option>
				<option value="イベント　プロモーション">イベント　プロモーション</option>
				<option value="広告">広告</option>
				<option value="宿泊">宿泊</option>
				<option value="駐車場">駐車場</option>
				<option value="ロケ撮影">ロケ撮影</option>
				<option value="その他">その他</option>
</datalist>
    </div>
    <div><input type="text" placeholder="カテゴリ" list="da_cate"><i>▼</i>
<datalist id="da_cate">
				<option value="イベント">イベント</option>
				<option value="結婚式場">結婚式場</option>
				<option value="オフィス">オフィス</option>
				<option value="ホール">ホール</option>
				<option value="貸し会議室">貸し会議室</option>
				<option value="スタジオ">スタジオ</option>
				<option value="カフェ">カフェ</option>
				<option value="レストラン">レストラン</option>
				<option value="映画館">映画館</option>
				<option value="ギャラリー">ギャラリー</option>
				<option value="バー">バー</option>
				<option value="スポーツ施設">スポーツ施設</option>
				<option value="娯楽施設">娯楽施設</option>
				<option value="ホテル">ホテル</option>
				<option value="住宅">住宅</option>
				<option value="倉庫">倉庫</option>
				<option value="ワイナリ・蔵">ワイナリ・蔵</option>
				<option value="百貨店">百貨店</option>
				<option value="オフィス街">オフィス街</option>
				<option value="商店街アーケード">商店街アーケード</option>
				<option value="ロードサイド">ロードサイド</option>
				<option value="駅近　ロータリー">駅近　ロータリー</option>
				<option value="軒先き">軒先き</option>
				<option value="移動販売車設置">移動販売車設置</option>
				<option value="駅地下">駅地下</option>
				<option value="一戸建て">一戸建て</option>
				<option value="テラス">テラス</option>
				<option value="看板">看板</option>
				<option value="掲示スペース">掲示スペース</option>
				<option value="駐車場">駐車場</option>
				<option value="その他">その他</option>
</datalist>
    </div>
    <div><input type="text" placeholder="エリア" list="da_eria"><i>▼</i>
<datalist id="da_eria">
				<option value="梅田">梅田</option>
				<option value="新大阪">新大阪</option>
				<option value="北新地">北新地</option>
				<option value="本町">本町</option>
				<option value="北浜">北浜</option>
				<option value="淀屋橋">淀屋橋</option>
				<option value="南船場">南船場</option>
				<option value="心斎橋">心斎橋</option>
				<option value="難波">難波</option>
				<option value="天王寺">天王寺</option>
				<option value="北・南堀江　新町">北・南堀江　新町</option>
				<option value="上本町">上本町</option>
 </datalist>   
    </div>    
    <!--div><input type="text" placeholder="TIME" value=""><i>▼</i></div-->
    <input type="submit" value="検索">
    </form>    
    </nav>
    <div class="party_search_list bgcg">
   <h2>スタッフのイチオシスペース</h2>
       <div class="wrap party_abt">
    <p class="txtL">スタッフのイチオシスペーススタッフのイチオシスペーススタッフのイチオシスペーススタッフのイチオシスペーススタッフのイチオシスペーススタッフのイチオシスペース</p>
    
                <ul class="recomend-list">
                    <li><img width="300" height="200" src="http://sf.rwrwrw.com/wp-content/uploads/2018/02/news_03.jpg" class="object-fit-img wp-post-image" alt="" />		</li>
                    <li><img width="300" height="200" src="http://sf.rwrwrw.com/wp-content/uploads/2018/02/news_02.jpg" class="object-fit-img wp-post-image" alt="" />		</li>
                    <li><img width="300" height="200" src="http://sf.rwrwrw.com/wp-content/uploads/2018/02/news_01.jpg" class="object-fit-img wp-post-image" alt="" />		</li>
                    <li><img width="300" height="200" src="http://sf.rwrwrw.com/wp-content/uploads/2018/02/news_01.jpg" class="object-fit-img wp-post-image" alt="" />		</li>
                    <li><img width="300" height="200" src="http://sf.rwrwrw.com/wp-content/uploads/2018/02/news_02.jpg" class="object-fit-img wp-post-image" alt="" />		</li>
                    <li><img width="300" height="200" src="http://sf.rwrwrw.com/wp-content/uploads/2018/02/news_03.jpg" class="object-fit-img wp-post-image" alt="" />		</li>
    </ul>
    
       </div>

    </div>


</section>

@stop




