@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">
<section class="party_page">
	<div class="party_page_mv event_types"><div class="party_page_mv_box"><h1>目的から探す</h1>
<p>やってみたいことから、場所や目的をキーワードで検索してみましょう。<br>
思いがけないスペースと巡り会えるかもしれません。<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！地図から直接検索もできます。<br>
設備も充実。予約カレンダーツールで空いている日を検索。スマホやパソコンでいつでもどこでもすぐに予約できます。<br>
使い方は様々です。気に入ったスペースを見つけて今すぐ活用しよう！</p>  
    </div></div>
@include('mid-nav')


<div class="party_search_list bgcg">
    <h2>目的で探す</h2>
        <div class="wrap party_abt">
            <p>
                <a href="/purpose/sales">物販</a>
                <a href="/purpose/party">飲食・パーティー</a>
                <a href="/purpose/office">オフィス・会議</a>
                <a href="/purpose/event">イベントプロモーション・広告</a>
                <a href="/purpose/exhibitionhall">催事・展示会</a>
                <a href="/purpose/performance">演奏</a>
                <a href="/stay">宿泊・民泊</a>
                <a href="/purpose/location">ロケ撮影･写真･動画</a>
                <a href="/purpose/wedding">結婚式・お祝いシーン</a>
                <a href="/purpose/parking">駐車場</a>
                <a href="/purpose/sports">スポーツ</a>
                <a href="/purpose/other">その他</a>
            </p>
        </div>
        <div class="party_search_list bgcg">
    <h2>設備で探す</h2>
    <div class="wrap party_abt">
            <p>
                <a href="/search">テーブル</a>
                <a href="/search">椅子</a>
                <a href="/search">プロジェクター</a>
                <a href="/search">駐車場　</a>
                <a href="/search">Wi-Fi</a>
                <a href="/search">ホワイトボード</a>
                <a href="/search">キッチン設備</a>
                <a href="/search">調理機器</a>
                <a href="/search">テレビ</a>
                <a href="/search">プリンタ</a>
                <a href="/search">ロッカー</a>
                <a href="/search">携帯充電器</a>
                <a href="/search">ケータリング</a>
                <a href="/search">音響設備</a>
                <a href="/search">ミラー</a>
                <a href="/search">シャワー</a>
                <a href="/search">更衣室</a>
                <a href="/search">照明</a>
                <a href="/search">トイレ</a>
                <a href="/search">冷蔵冷凍庫</a>
                <a href="/search">冷蔵庫</a>
                <a href="/search">冷凍庫</a>
                <a href="/search">電子レンジ</a>
                <a href="/search">ケトル</a>
                <a href="/search">エアコン</a>
                <a href="/search">駅が近い</a>
                <a href="/search">飲食店</a>
                <a href="/search">コンビニ</a>
                <a href="/search">スーパー</a>
                <a href="/search">ペット可</a>
                <a href="/search">バリアフリー</a>
                <a href="/search">飲食可能</a>
                <a href="/search">お子様連れ</a>
                <a href="/search">シニア</a>
                <a href="/search">喫煙可能</a>
                <a href="/search">禁煙</a>
                <a href="/search">喫煙所あり</a>
            </p>
        </div>
    </div>
    <div class="party_search_list table_list bgcg">
    <h2>エリアから探す</h2>
        <div class="wrap">
        <h3>大阪府</h3>
            <table>
            <tbody>
                <tr>
                <td rowspan="11" class="rowspan">大阪市</td>
                <td>
                    <ul class="table_list_menu">
                    <li>
                    <a href="/search">北区</a>
                    <ul class="table_list_menu_sec">
                        <li><a href="/search">梅田</a></li>
                    </ul>
                    </li>
                    <li><a href="/search">都島区</a></li>
                    <li><a href="/search">福島区</a></li>
                    <li><a href="/search">此花区</a></li>
                    <li>
                    <a href="/search">中央区</a>
                        <ul class="table_list_menu_sec">
                        <li><a href="/search">心斎橋</a></li>
                        <li><a href="/search">なんば</a></li>
                        <li><a href="/search">北浜</a></li>
                        <li><a href="/search">淀屋橋</a></li>
                        <li><a href="/search">本町</a></li>
                        <li><a href="/search">南船場</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="/search">西区</a>
                        <ul class="table_list_menu_sec">
                        <li><a href="/search">新町</a></li>
                        <li><a href="/search">北堀江</a></li>
                        <li><a href="/search">南堀江</a></li>
                        </ul>
                    </li>
                        <li><a href="/search">港区</a></li>
                        <li><a href="/search">大正区</a>
                    </li>
                    <li>
                    <a href="/search">天王寺区</a>
                        <ul class="table_list_menu_sec">
                        <li><a href="/search">天王寺</a></li>
                        <li><a href="/search">阿倍野</a></li>
                        <li><a href="/search">上本町</a></li>
                        </ul>
                    </li>
                    <li>
                    <a href="/search">浪速区</a>
                        <ul class="table_list_menu_sec">
                        <li><a href="/search">なんば</a></li>
                        </ul>
                    </li>
                    <li><a href="/search">西淀川区</a></li>
                    <li><a href="/search">淀川区</a></li>
                    <li><a href="/search">東淀川区</a></li>
                    <li><a href="/search">西成区</a></li>
                    <li><a href="/search">生野区</a></li>
                    <li><a href="/search">旭区</a></li>
                    <li><a href="/search">城東区</a></li>
                    <li><a href="/search">鶴見区</a></li>
                    <li><a href="/search">阿倍野区</a></li>
                    <li><a href="/search">住之江区</a></li>
                    <li><a href="/search">住吉区</a></li>
                    <li><a href="/search">東住吉区</a></li>
                </ul>
            </td>
            </tr>
            </tbody>
            <tbody>
                <tr class="top_border">	
                <td rowspan="7" class="rowspan">堺市</td><td>
                <ul class="table_list_menu">
                    <li>
                        <a href="/search">豊能地域</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">野瀬町</a></li>
                                <li><a href="/search">豊能町</a></li>
                                <li><a href="/search">池田市</a></li>
                                <li><a href="/search">箕面市</a></li>
                                <li><a href="/search">豊中市</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="/search">三島地域</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">茨城市</a></li>
                                <li><a href="/search">高槻市</a></li>
                                <li><a href="/search">島本町</a></li>
                                <li><a href="/search">吹田市</a></li>
                                <li><a href="/search">摂津市</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="/search">北河内地域</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">枚方市</a></li>
                                <li><a href="/search">交野市</a></li>
                                <li><a href="/search">寝屋川市</a></li>
                                <li><a href="/search">守口市</a></li>
                                <li><a href="/search">門真市</a></li>
                                <li><a href="/search">四條畷市</a></li>
                                <li><a href="/search">大東市</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="/search">中河内地域</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">東大阪市</a></li>
                                <li><a href="/search">八尾市</a></li>
                                <li><a href="/search">柏原市</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="/search">泉北市域</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">和泉市</a></li>
                                <li><a href="/search">高石市</a></li>
                                <li><a href="/search">泉大津市</a></li>
                                <li><a href="/search">忠岡町</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="/search">泉南地域</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">岸和田市</a></li>
                                <li><a href="/search">貝塚市</a></li>
                                <li><a href="/search">熊取町</a></li>
                                <li><a href="/search">泉佐野市</a></li>
                                <li><a href="/search">田尻市</a></li>
                                <li><a href="/search">泉南市</a></li>
                                <li><a href="/search">阪南市</a></li>
                                <li><a href="/search">岬町</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="/search">南河内地域</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">松原市</a></li>
                                <li><a href="/search">羽曳野市</a></li>
                                <li><a href="/search">藤井寺市</a></li>
                                <li><a href="/search">太子町</a></li>
                                <li><a href="/search">河南町</a></li>
                                <li><a href="/search">千早赤阪村</a></li>
                                <li><a href="/search">富田林市</a></li>
                                <li><a href="/search">大阪狭山市</a></li>
                                <li><a href="/search">河内長野市</a></li>
                            </ul>
                    </li>
                </ul>
                </td>
                </tr>
            </tbody>
            </table>
        <h3>兵庫県</h3>
            <table>
            <tbody>
                <tr>
                <td class="rowspan">神戸市</td><td>
                <ul class="table_list_menu">
                    <li><a href="/search">中央区</a>
                    <ul class="table_list_menu_sec">
                        <li><a href="/search">三宮・元町</a></li>
                    </ul>
                    </li>
                    <li><a href="/search">灘区</a></li>
                    <li><a href="/search">東灘区</a></li>
                    <li><a href="/search">兵庫区</a>
                        <ul class="table_list_menu_sec">
                            <li><a href="/search">神戸、ハーバーランド</a></li>
                        </ul>
                    </li>
                    <li><a href="/search">長田区</a></li>
                    <li><a href="/search">須磨区</a></li>
                    <li><a href="/search">垂水区</a></li>
                    <li><a href="/search">北区</a></li>
                    <li><a href="/search">西区</a></li>
                </ul>
                </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="top_border">	
                <td class="rowspan">阪神南地域</td>
                    <td>
                        <ul class="table_list_menu">
                        <li><a href="/search">尼崎市</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">尼崎</a></li>
                            </ul>
                        </li>
                        <li><a href="/search">西宮市</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">西宮</a></li>
                            </ul>
                        </li>
                        <li><a href="/search">芦屋市</a>
                            <ul class="table_list_menu_sec">
                                <li><a href="/search">芦屋</a></li>
                            </ul>
                        </li>
                        </ul>
                    </td>
            </tr>
            </tbody>
            <tbody>
            <tr class="top_border">	
                <td class="rowspan">阪神北地域</td><td>
                <ul class="table_list_menu">
                    <li><a href="/search">伊丹市</a></li>
                    <li><a href="/search">宝塚市</a></li>
                    <li><a href="/search">川西市</a></li>
                    <li><a href="/search">三田市</a></li>
                    <li><a href="/search">猪名川市</a></li>
                </ul>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr class="top_border">	
                <td class="rowspan">東播磨地域</td><td>
                <ul class="table_list_menu">
                    <li><a href="/search">明石明石市</a>
                        <ul class="table_list_menu_sec">
                            <li><a href="/search">明石</a></li>
                        </ul>
                    </li>
                    <li><a href="/search">加古川市</a></li>
                    <li><a href="/search">高砂市</a></li>
                    <li><a href="/search">稲見町</a></li>
                    <li><a href="/search">播磨町</a></li>
                </ul>
            </td>
            </tr>
            </tbody>
            <tbody>
            <tr class="top_border">	
                <td class="rowspan">北磻磨地域</td><td>
                    <ul class="table_list_menu">
                    <li><a href="/search">西脇市</a></li>
                    <li><a href="/search">三木市</a></li>
                    <li><a href="/search">小野市</a></li>
                    <li><a href="/search">加西市</a></li>
                    <li><a href="/search">加東市</a></li>
                    <li><a href="/search">多可町</a></li>
                    </ul>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr class="top_border">	
                <td class="rowspan">中播磨地域</td><td>
                    <ul class="table_list_menu">
                    <li><a href="/search">姫路市</a></li>
                    <li><a href="/search">神河町</a></li>
                    <li><a href="/search">市川町</a></li>
                    <li><a href="/search">福崎町</a></li>
                    </ul>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr class="top_border">	
                <td class="rowspan">西播磨地域</td><td>
                    <ul class="table_list_menu">
                    <li><a href="/search">相生市</a></li>
                    <li><a href="/search">たつの市</a></li>
                    <li><a href="/search">赤穂市</a></li>
                    <li><a href="/search">宍粟市</a></li>
                    <li><a href="/search">太子町</a></li>
                    <li><a href="/search">上郡町</a></li>
                    <li><a href="/search">左用町</a></li>
                    </ul>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr class="top_border">	
                <td class="rowspan">但馬地域</td><td>
                    <ul class="table_list_menu">
                    <li><a href="/search">豊岡市</a></li>
                    <li><a href="/search">秩父市</a></li>
                    <li><a href="/search">朝霧市</a></li>
                    <li><a href="/search">香美町</a></li>
                    <li><a href="/search">新温泉町</a></li>
                    </ul>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr class="top_border">	
                <td class="rowspan">丹波地域</td><td>
                <ul class="table_list_menu">
                    <li><a href="/search">篠山市</a></li>
                    <li><a href="/search">丹波市</a></li>
                </ul>
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr class="top_border">	
                <td class="rowspan">淡路島</td>
                    <td>
                    <ul class="table_list_menu">
                        <li><a href="/search">洲本市</a>
                            <ul class="table_list_menu_sec">
   		                        <li><a href="/search">淡路島</a></li>
    	                    </ul>
                        </li>
                        <li><a href="/search">南あわじ市</a></li>
                        <li><a href="/search">淡路市</a></li>
                    </ul>
                    </td>
            </tr>
            </tbody>
            </table>
            <h3>京都府</h3>
            <table>
            <tbody>
            <tr>
                <td class="rowspan">京都市</td><td>
                <ul class="table_list_menu">
                    <li><a href="/search">上京区</a></li>
                    <li><a href="/search">左京区</a></li>
                    <li><a href="/search">中京区</a></li>
                    <li><a href="/search">東山区</a></li>
                    <li><a href="/search">山科区</a></li>
                    <li><a href="/search">下京区</a>
                        <ul class="table_list_menu_sec">
                            <li><a href="/search">京都</a></li>
                        </ul>
                    </li>    
                    <li><a href="/search">南区</a></li>
                    <li><a href="/search">右京区</a></li>
                    <li><a href="/search">西京区</a></li>
                    <li><a href="/search">伏見区</a></li>
            </tr>
            </tbody>
            <tbody>
            <tr class="top_border">	
                <td class="rowspan">その他市域</td>
                    <td>
                    <ul class="table_list_menu">
                        <li><a href="/search">福知山市</a></li>
                        <li><a href="/search">舞鶴市</a></li>
                        <li><a href="/search">綾部市</a></li>
                        <li><a href="/search">宇治市</a></li>
                        <li><a href="/search">宮津市</a></li>
                        <li><a href="/search">亀岡市</a></li>
                        <li><a href="/search">城陽市</a></li>
                        <li><a href="/search">日向市</a></li>
                        <li><a href="/search">長岡京市</a></li>
                        <li><a href="/search">八幡市</a></li>
                        <li><a href="/search">京田辺市</a></li>
                        <li><a href="/search">京丹後市</a></li>
                        <li><a href="/search">南丹市</a></li>
                        <li><a href="/search">木津川市</a></li>
                        <li><a href="/search">乙訓郡</a></li>
                        <li><a href="/search">久世郡</a></li>
                        <li><a href="/search">綴喜郡</a></li>
                        <li><a href="/search">相楽郡</a></li>
                        <li><a href="/search">船井郡</a></li>
                        <li><a href="/search">与謝郡</a></li>
                    </ul>
                    </td>
            </tr>
            </tbody>
            </table>
        <h3>近隣エリア</h3>
            <table>
            <tbody>
            <tr>
                <td class="rowspan">近隣エリア</td>
                <td>
                    <ul class="table_list_menu">
                        <li><a href="/search">奈良エリア</a></li>
                        <li><a href="/search">滋賀エリア</a></li>
                        <li><a href="/search">和歌山エリア</a></li>
                    </ul>
                </td>
            </tr>
            </tbody>
            </table>

<div class="party_search_list bgcg">
    <h2>施設で探す</h2>
        <div class="wrap party_abt">
            <p>
                <a href="/space_detail/spacedetail">イベント</a>
                <a href="/search">結婚式場</a>
                <a href="/search">オフィス</a>
                <a href="/search">ホール</a>
                <a href="/search">貸会議室</a>
                <a href="/search">スタジオ</a>
                <a href="/search">カフェ</a>
                <a href="/search">レストラン</a>
                <a href="/search">映画館</a>
                <a href="/search">ギャラリー</a>
                <a href="/search">バー</a>
                <a href="/search">スポーツ施設</a>
                <a href="/search">娯楽施設</a>
                <a href="/search">ホテル</a>
                <a href="/search">住宅</a>
                <a href="/search">倉庫</a>
                <a href="/search">ワイナリー</a>
                <a href="/search">蔵</a>
                <a href="/search">百貨店</a>
                <a href="/search">オフィス街</a>
                <a href="/search">商店街</a>
                <a href="/search">アーケード</a>
                <a href="/search">ロードサイド</a>
                <a href="/search">駅近</a>
                <a href="/search">ロータリー</a>
                <a href="/search">軒先</a>
                <a href="/search">駅地下</a>
            </p> 
        </div>
</div>

<div class="party_search_list attention_area">
   <h2>注目のエリア</h2>
   <ul>
   <li><a href="/search">
   <span><img src="/assets/images/party/umeda.png"></span><br>梅田</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '心斎橋' ) }}"><span><img src="/assets/images/party/shinsaibashi.png"></span><br>心斎橋</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '難波' ) }}"><span><img src="/assets/images/party/nanba.png"></span><br>なんば</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '北浜' ) }}"><span><img src="/assets/images/party/kitahama.png"></span><br>北浜</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '淀屋橋' ) }}"><span><img src="/assets/images/party/yodoyabashi.png"></span><br>淀屋橋</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '本町' ) }}"><span><img src="/assets/images/party/honcho.png"></span><br>本町</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '南船場' ) }}"><span><img src="/assets/images/party/minamihunaba.png"></span><br>南船場</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '新町' ) }}"><span><img src="/assets/images/party/shinmachi.png"></span><br>新町</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '北堀江' ) }}"><span><img src="/assets/images/party/kitahorie.png"></span><br>北堀江</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '南堀江' ) }}"><span><img src="/assets/images/party/minamihorie.png"></span><br>南堀江</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '天王寺' ) }}"><span><img src="/assets/images/party/tannoji.png"></span><br>天王寺</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '阿倍野' ) }}"><span><img src="/assets/images/party/abeno.png"></span><br>阿倍野</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '上本町' ) }}"><span><img src="/assets/images/party/kamihoncho.png"></span><br>上本町</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '京都' ) }}"><span><img src="/assets/images/party/kyoto.png"></span><br>京都</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '三宮' ) }}"><span><img src="/assets/images/party/motomachi.png"></span><br>三宮・元町</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '神戸' ) }}"><span><img src="/assets/images/party/kobe.png"></span><br>神戸・ハーバーランド</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '神戸' ) }}"><span><img src="/assets/images/party/amagasaki.png"></span><br>神戸</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '西宮' ) }}"><span><img src="/assets/images/party/nishinomiya.png"></span><br>西宮</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '芦屋' ) }}"><span><img src="/assets/images/party/ashiya.png"></span><br>芦屋</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '明石' ) }}"><span><img src="/assets/images/party/akashi.png"></span><br>明石</a></li>
   <li><a href="{{ action('SearchController@areasearchindex', '淡路島' ) }}"><span><img src="/assets/images/party/awajishima.png"></span><br>淡路島</a></li>
   </ul>
</div>

<div class="three_list party_lank">
    <div class="party_search_list bgcg">
        <h2>収容人数で探す</h2>
            <div class="wrap party_abt">
                <p>
                    <a href="/space_detail/spacedetail">1人〜</a>
                    <a href="/space_detail/spacedetail">〜5人</a>
                    <a href="/space_detail/spacedetail">〜10人</a>
                    <a href="/search">〜20人</a>
                    <a href="/search">〜30人</a>
                    <a href="/search">〜40人</a>
                    <a href="/search">〜50人</a>
                    <a href="/search">〜100人</a>
                    <a href="/search">〜200人</a>
                    <a href="/search">〜300人</a>
                    <a href="/search">〜400人</a>
                    <a href="/search">〜500人</a>
                    <a href="/search">〜1000人</a>
                    <a href="/search">〜10000人</a></p>
            </div>
    </div>
</div>


</div><!-- party_search_list END-->
</section>

<script>
$(function() {
	$('label.open').on('click', function () {
	$(this).parents('tbody').toggleClass("MaxHeight");

if ($(this).parents('tbody').hasClass("MaxHeight")) {
	$(this).html("▲とじる");
	$(this).css({"bottom":"1em","top":"inherit"});

  } else if (!$(this).parents('tbody').hasClass("MaxHeight")) {
	$(this).html("▼ひらく");
	$(this).css({"top":"1em","bottom":"inherit"});
}
	
    });
});
</script>


@stop
