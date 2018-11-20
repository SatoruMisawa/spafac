<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="{{ asset('/css/host/index.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrap">
        <div id="header01">
            <div class="logo"><a href="https://test.spafac.com"><img src="{{ asset('/img/logo-top.png') }}" alt=""></a></div>
            <nav>
                <ul>
                    <li><a href="#">ダッシュボード</a></li>
                    <li><a href="#">スペース管理</a></li>
                    <li><a href="#">予約管理</a></li>
                    <li><a href="#">メッセージBOX</a></li>
                    <li><a href="#">売上管理</a></li>
                    <li><a href="#">設定</a></li>
                    <li><a href="#">ヘルプ</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                    <li class="btn">
                        <div class="btnBody"><a href="#">スペースを登録</a></div>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="dashboardTop">
            <div id="header02">
                <div class="inner">
                    <ul>
                        <li><a href="#">ダッシュボード</a></li>
                        <li><a href="#">メッセージ</a></li>
                        <li><a href="#">スペース</a></li>
                        <li><a href="#">参加する</a></li>
                        <li><a href="#">プロフィール</a></li>
                        <li><a href="#">アカウント</a></li>
                    </ul>
                </div>
            </div>
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
    </div>
</body>

</html>