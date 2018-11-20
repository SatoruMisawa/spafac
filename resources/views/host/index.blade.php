@extends('host.layouts.master')

@section('content')
<div class="dashboardTop">
    <div class="content">
        <div class="inner">
            <div class="picture">
                <div class="ttl">
                    <h2>ダッシュボード</h2>
                </div>
                <div class="photos"><img src="{{ asset('/img/default_profile_image.jpg') }}" alt="" />
                    <div class="name"> <a>石川花子</a> </div>
                </div>
                <div class="infobox">
                    <div class="ttl">
                        <h3>ヘルプ</h3>
                    </div>
                    <div class="infoTxt">
                        <h4>予約について</h4>
                        <ul>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                        </ul>
                        <h4>決済について</h4>
                        <ul>
                            <li><a href="#">テキストサンプル</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="news">
                <div class="infobox">
                    <div class="ttl">
                        <h3>やることリスト</h3>
                    </div>
                    <div class="infoTxt">
                        <ul>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                        </ul>
                    </div>
                </div>
                <div class="infobox">
                    <div class="ttl">
                        <h3>未読の新着メッセージ</h3>
                    </div>
                    <div class="infoTxt">
                        <ul>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                        </ul>
                        <div class="readmore"> <a href="#">全てのメッセージを読む</a> </div>
                    </div>
                </div>
                <div class="infobox">
                    <div class="ttl">
                        <h3>未完了の予約リクエスト</h3>
                    </div>
                    <div class="infoTxt">
                        <ul>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                        </ul>
                    </div>
                </div>
                <div class="infobox">
                    <div class="ttl">
                        <h3>予約完了</h3>
                    </div>
                    <div class="infoTxt">
                        <ul>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                            <li><a href="#">テキストサンプル</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection