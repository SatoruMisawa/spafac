@extends('layouts.master')

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


   <!-- <div class="three_list new_review">
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
   </div> -->


<div class="three_list summary">
    <h2>関連するまとめ</h2>
    <div class="pac">
        <ul>
            <li><div class="pic"><img src="https://magazine.spafac.com/wp-content/uploads/2018/11/45198452_1936266683156801_4458416983733436416_n.jpg" alt="review" href="https://magazine.spafac.com/2018/11/08/arashi-moritomo-live/"></div>
                <p><a href="https://magazine.spafac.com/2018/11/08/arashi-moritomo-live/">森友嵐士さんのSecretライブ　イベントレポート</a></p>
           </li>
           <li><div class="pic"><img src="https://magazine.spafac.com/wp-content/uploads/2018/11/45280391_2066236716761304_8326664946569969664_o.jpg" alt="review" href="https://magazine.spafac.com/2018/11/08/zombie-partyshinsaibashi/"></div>
                <p><a href="https://magazine.spafac.com/2018/11/08/zombie-partyshinsaibashi/">【２０人限定】ジビエクィーン中川妙子スペシャルパーティー in心斎橋</a></p>
           </li>
           <li><div class="pic"><img src="https://magazine.spafac.com/wp-content/uploads/2018/11/box-2953722_640.jpg" alt="review" href="https://magazine.spafac.com/2018/11/08/2018xmasparty/"></div>
                <p><a href="https://magazine.spafac.com/2018/11/08/2018xmasparty/">今年のクリスマスはどう過ごしますか？大人女子の事情</a></p>
           </li>
        </ul>
    </div>
<p class="more_lank"><a href="https://magazine.spafac.com/">関連するまとめをもっと見る</a></p>
   </div>

@include('sp_kansaiarea')　<!-- 注目のエリア -->
@include('sp_area')　<!-- エリア-->
@include('sp_people')　<!-- 収容人数-->
@include('sp_purpose')　<!-- 目的を探す-->
@include('sp_institution')　<!-- 施設-->
@include('sp_amenity')　<!-- 設備-->

        </div>
    </div>
</section>

@stop
