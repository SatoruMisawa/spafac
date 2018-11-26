<link rel="stylesheet" href="{{ asset('/css/host/layouts/header.css') }}">

<div id="header01">
    <div class="logo"><a href="/><img src="{{ asset('img/logo-top.png') }}" alt=""></a></div>
    <nav>
        <ul>
            <li><a href="{{ route('host.index') }}">ダッシュボード</a></li>
            <li><a href="#">スペース管理</a></li>
            <li><a href="#">予約管理</a></li>
            <li><a href="{{ route('maillist') }}">メッセージBOX</a></li>
            <li><a href="#">売上管理</a></li>
            <li><a href="{{ route('admin.owner.profile.profile_account') }}">設定</a></li>
            <li><a href="#">ヘルプ</a></li>
            <li><a href="#">お問い合わせ</a></li>
            <li class="btn">
             <div class="btnBody"><a href="{{ route('host.facility.new') }}">スペースを登録</a></div>
            </li>
        </ul>
    </nav>
</div>
