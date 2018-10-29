@extends('layouts2.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">

<section class="party_page">
	<div class="party_page_mv {{$page}}">
    
    <div class="party_page_mv_box">
@if(!array_key_exists($page,$page_name))
   <h1>飲食・パーティー</h1>  
<p>ホームパーティ貸切や個室の１室のみなど、人数やエリアを検索してお好みのスペースを検索しよう。<br>
女子会やコンパ、同窓会など様々なプランに応じて提供いたします。<br>
インスタ映えやフォトジェニックな空間など<br>
好きなスペースを借りてワクワク楽しい時間を過ごしましょう。
</p>
@else
   <h1>{{$page_name[$page]}}</h1>

@switch($page)
    @case('sales')
<p>
自分のブランドや新商品の販売など数多くの物販店の軒先や空きスペース、<br>
商品コンセプトに応じた空きスペースを探してみよう。<br>
ブランドコラボレーションも夢ではありません。 <br>
物販の空きスペース登録・検索予約はスペースファクトリーにお任せ下さい！<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！<br>
スマホやパソコンでいつでもどこでも登録検索。</p>

    @break

    @case("event")
<p>
イベントや商品プロモーションなどターゲットや客層に合わせてスペースを探してみよう。<br>
街角のい小さなスペースからビルの上の大きなスペースまで、<br>
大小様々な広告宣伝スペースも有効活用して自由に表現してみよう。
</p>
    @break

    @case("office")
<p>駅近一等地のオフィスから、出張先や目的エリアでの作業空間を探せます。<br>
オフィスの空きスペース登録・検索予約はスペースファクトリーにお任せ下さい！<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！<br>
スマホやパソコンでいつでもどこでも登録検索。</p>
    @break

    @case("parking")
<p>
出張や外出でご自宅を開けている期間やお持ちの空いている駐車場スペースを有効活用しよう！<br>
ご近所のバザーやフリーマーケットから軒先の駐車場での物販、<br>
お祭り時の露店販売など思いついたらワクワクしませんか？<br>
思いついたらすぐ活用してみましょう！
</p>
    @break
    
    @case("meeting")
<p>
様々な人とコミュニケーションが取れるコアワーキングスペースのを１日レンタル。<br>
設備環境の整った貸し会議室から静かなオフィスなどなど、<br>
レンタルスペースでワークショップやセミナーなど様々な目的に合わせてご用意いたします。<br>
オフィスや会議の空きスペース登録・検索予約はスペースファクトリーにお任せ下さい！
</p>
    @break

    @case("ad")
<p>一等地の看板スペースから、駅ナカ、駅地下の広告スペース、<br>
様々な店舗のスペースで広告を掲載してみてはいかがでしょうか？<br>
広告の空きスペース登録・検索予約はスペースファクトリーにお任せ下さい！<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！<br>
スマホやパソコンでいつでもどこでも登録検索。</p>
    @break

    @case("specialevent")
<p>百貨店の催事スペースから、人気エリアの空きスペースまで、<br>
ブランディングから幅広いターゲットへの告知など使い方は自由自在です。<br>
催事の空きスペース登録・検索予約はスペースファクトリーにお任せ下さい！<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！<br>
スマホやパソコンでいつでもどこでも登録検索。</p>
    @break

    @case("exhibition")
<p>
百貨店の催事スペースから、人気エリアの空きスペースまで、<br>
ブランディングから幅広いターゲットへの告知など使い方は自由自在です。<br>
自ら創った展示品を様々な人に鑑賞していただきましょう。<br>
１から始める自分だけの空間作りを始めてみましょう。
</p>

    @break

    @case("exhibitionhall")
<p>個展や自ら創った展示品を様々な人に鑑賞していただきましょう。<br>
おしゃれなスペースでインスタ映えにも最適。<br>
展示会の空きスペース登録・検索予約はスペースファクトリーにお任せ下さい！<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！<br>
スマホやパソコンでいつでもどこでも登録検索。</p>

    @break

    @case("performance")
<p>
周りを気にすることなく思いっきり演奏を楽しんで。<br>
路上ライブも、ライブハウスでも飲食店やバーでも。<br>
プチ演奏会や普段ではできない演奏の練習など、<br>
様々なシーンで素敵な音色を奏でて下さい。
</p>
    @break

    @case("sports")
<p>空き地の一角から競技場やプール、<br>
プライベートジムなど家族や気の合う仲間達と一緒に汗を流して観てはいかがでしょうか？<br>
スポーツの空きスペース登録・検索予約はスペースファクトリーにお任せ下さい！<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！<br>
スマホやパソコンでいつでもどこでも登録検索。</p>
    @break

    @case("other")
<p>
関西地域のほんの小さなスペースから、<br>
スタジアム・公園や普段は使うことの無い様々なレア空間に巡り会えるかも。<br>
思いついたら色々と検索して行動してみよう。<br>
ワクワクやドキドキしたあの頃をもう一度思い出してみよう。
</p>
    @break

    @case("location")
<p>
ロケ撮影用の空きスペースはありませんか？<br>
変わった空間やおしゃれな空間で動画やロケ・モデルの撮影など、<br>
もしかしたらあなたのお店に有名人が、、、なんてことも。
</p>
    @break

    @case("lodging")
<p>友人や知人、家族でのプライベート旅行から１日だけの日帰り旅行に。<br>
また時間貸しも可能な宿泊施設を豊富に取り扱っております。<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！<br>
スマホやパソコンでいつでもどこでも登録検索。</p>
<p class="more_lank"><a href="/stay">宿泊をもっとみる</a></p>
    @break

    @case("wedding")
<p>
何かと費用のかかる結婚式も短時間からスペースを借りて<br>
友人を集めて自分たちだけで作るオリジナリティあふれる結婚式。<br>
ウエディングドレスをレンタルして、叶わなかった教会での写真撮影。<br>
思い出は今からでも作り出せます。<br>
一生に一度のパートナーに今だからできる小さな幸せが胸いっぱいに。
</p>
    @break

    @case("display")
<p>個展や自ら創った展示品を様々な人に鑑賞していただきましょう。<br>
おしゃれなスペースでインスタ映えにも最適。<br>
展示会の空きスペース登録・検索予約はスペースファクトリーにお任せ下さい！<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！<br>
スマホやパソコンでいつでもどこでも登録検索。</p>
    @break
    
    @case("servicepack")
<p>
貸す人も借りる人も様々なビジネスシーンや「ワクワク ドキドキ」のあれやこれやをお手伝いできる、<br>
提携パートナーとのスペファクプレミアムサービスパックを<br>
会員登録（無料）を頂きました皆様へご用意致しております。<br>
思う存分有効活用してみてください！
</p>

    @break

 @default

<p>ホームパーティ貸切や個室の１室のみなど、人数やエリアを検索してお好みのスペースを検索しよう。<br>
女子会やコンパ、同窓会など様々なプランに応じて提供いたします。<br>
インスタ映えやフォトジェニックな空間など<br>
好きなスペースを借りてワクワク楽しい時間を過ごしましょう。
</p>

 @break
@endswitch



@endif    
   </div>
   
    </div>
        @include('mid-nav')

   <div class="three_list party_lank">
        @include('ranking')
   </div>
    

   <div class="three_list new_review">
   <h2>新着レビュー</h2>
   <div class="pac">
       <ul>
           <li>
           <img src="/assets/images/party/party_icon01.png" alt="review">
           <h3>ここにニックネーム</h3>
               <div class="review_readme">
               <p>【直前20％OFF】☆MOLE五反田☆駅徒歩2分のキッチン付きスペース#タコパ#テレビ#うちスタ#たこ焼き</p>
               </div>
               <p class="date">登校日 2018/07/04</p>
               <p>10名程で会社の同僚のフェアウェルパーティーをしました。 非常に満足しています。ありがとうございました。 ・全体的に掃除が行き届いてきれいでした ・調理道具類も充実していました ・ゴミ　・・・</p>
           </li>

           <li>
           <img src="/assets/images/party/party_icon01.png" alt="review">
           <h3>ここにニックネーム</h3>
               <div class="review_readme">
               <p>【直前20％OFF】☆MOLE五反田☆駅徒歩2分のキッチン付きスペース#タコパ#テレビ#うちスタ#たこ焼き</p>
               </div>
               <p class="date">登校日 2018/07/04</p>
               <p>10名程で会社の同僚のフェアウェルパーティーをしました。 非常に満足しています。ありがとうございました。 ・全体的に掃除が行き届いてきれいでした ・調理道具類も充実していました ・ゴミ　・・・</p>
           </li>

           <li>
           <img src="/assets/images/party/party_icon01.png" alt="review">
           <h3>ここにニックネーム</h3>
               <div class="review_readme">
               <p>【直前20％OFF】☆MOLE五反田☆駅徒歩2分のキッチン付きスペース#タコパ#テレビ#うちスタ#たこ焼き</p>
               </div>
               <p class="date">登校日 2018/07/04</p>
               <p>10名程で会社の同僚のフェアウェルパーティーをしました。 非常に満足しています。ありがとうございました。 ・全体的に掃除が行き届いてきれいでした ・調理道具類も充実していました ・ゴミ　・・・</p>
           </li>

       </ul>
</div>
<p class="more_lank"><a href="/search">新着レビューをもっと読む</a></p>
   </div>


   <div class="three_list summary">
   <h2>関連するまとめ</h2>
<div class="pac">
       <ul>
           <li>
<div class="pic"></div>
<p>【緊急応援企画】日本代表のベルギー・テキストテキストテキストテキストテキスト</p>
           </li>
           <li>
<div class="pic"></div>
<p>【緊急応援企画】日本代表のベルギー・テキストテキストテキストテキストテキスト</p>
           </li>
           <li>
<div class="pic"></div>
<p>【緊急応援企画】日本代表のベルギー・テキストテキストテキストテキストテキスト</p>
           </li>
       </ul>
</div>       
<p class="more_lank"><a href="/search">関連するまとめをもっと見る</a></p>
   </div>

    <div class="party_search_list attention_area">
   <h2>注目のエリア</h2>
   <ul>
   <li><a href="/search">
   <span><img src="/assets/images/party/umeda.png"></span><br>梅田</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/shinsaibashi.png"></span><br>心斎橋</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/nanba.png"></span><br>なんば</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kitahama.png"></span><br>北浜</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/yodoyabashi.png"></span><br>淀屋橋</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/honcho.png"></span><br>本町</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/minamihunaba.png"></span><br>南船場</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/shinmachi.png"></span><br>新町</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kitahorie.png"></span><br>北堀江</a></li>   
   <li><a href="/search"><span><img src="/assets/images/party/minamihorie.png"></span><br>南堀江</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/tannoji.png"></span><br>天王寺</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/abeno.png"></span><br>阿倍野</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kamihoncho.png"></span><br>上本町</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kyoto.png"></span><br>京都</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/motomachi.png"></span><br>三宮・元町</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kobe.png"></span><br>神戸・ハーバーランド</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/amagasaki.png"></span><br>尼崎</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/nishinomiya.png"></span><br>西宮</a></li>   
   <li><a href="/search"><span><img src="/assets/images/party/ashiya.png"></span><br>芦屋</a></li>   
   <li><a href="/search"><span><img src="/assets/images/party/akashi.png"></span><br>明石</a></li>   
   <li><a href="/search"><span><img src="/assets/images/party/awajishima.png"></span><br>淡路島</a></li>   
   </ul>
    </div>

    <div class="party_search_list table_list bgcg">
   <h2>エリアから探す</h2>

<div class="wrap">

@include('areas_table')

</div>

    </div>

    <div class="party_search_list">
   <h2>収容人数から探す</h2>
   <div class="wrap party_abt">
   <p><a href="/search">1人</a><a href="/search">5人</a><a href="/search">10人</a><a href="/search">20人</a><a href="/search">30人</a><a href="/search">40人</a><a href="/search">50人</a><a href="/search">100人</a><a href="/search">200人</a><a href="/search">300人</a><a href="/search">400人</a><a href="/search">500人</a><a href="/search">1000人</a><a href="/search">10000人</a></p>
   </div>
    </div>

    <div class="party_search_list bgcg">
   <h2>キーワードから探す</h2>
   <div class="wrap party_abt">

<p><a href="/search">イベント</a><a href="/search">結婚式場</a><a href="/search">オフィス</a><a href="/search">ホール</a><a href="/search">貸会議室</a><a href="/search">スタジオ</a><a href="/search">カフェ</a><a href="/search">レストラン</a><a href="/search">映画館</a>
<a href="/search">ギャラリー</a><a href="/search">バー</a><a href="/search">スポーツ施設</a><a href="/search">娯楽施設</a><a href="/search">ホテル</a><a href="/search">住宅</a><a href="/search">倉庫</a><a href="/search">ワイナリー</a><a href="/search">蔵</a><a href="/search">百貨店</a><a href="/search">オフィス街</a><a href="/search">商店街</a><a href="/search">アーケード</a><a href="/search">ロードサイド</a><a href="/search">駅近</a><a href="/search">ロータリー</a><a href="/search">軒先</a><a href="/search">駅地下</a></p> 
   </div>

    </div>


</section>

@stop
