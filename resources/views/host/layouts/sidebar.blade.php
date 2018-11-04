<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<!-- Sidebar Menu -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">スペース編集</li>
			<?php /* <li class="">
				<a href="{{ url('host/space/edit-institution/' . $currentSpace->id) }}"><i class="fa fa-link"></i> <span>施設情報</span></a>
			</li>
			<?php if ($currentSpace->input_status >= App\Space::INPUT_STATUS_INSTITUTION) : ?>
				<li class="">
					<a href="{{ url('host/space/edit-basic/' . $currentSpace->id) }}"><i class="fa fa-link"></i> <span>基本情報</span></a>
				</li>
			<?php endif }}
			<?php if ($currentSpace->input_status >= App\Space::INPUT_STATUS_BASIC) : ?>
				<li class="">
					<a href="{{ url('host/space/edit-explanation/' . $currentSpace->id) }}"><i class="fa fa-link"></i> <span>説明文</span></a>
				</li>
			<?php endif }}
			<?php if ($currentSpace->input_status >= App\Space::INPUT_STATUS_EXPLANATION) : ?>
				<li class="">
					<a href="{{ url('host/space/edit-media/' . $currentSpace->id) }}"><i class="fa fa-link"></i> <span>写真・動画</span></a>
				</li>
			<?php endif }}
			<?php if ($currentSpace->input_status >= App\Space::INPUT_STATUS_COMPLETE) : ?>
				<li class="">
					<a href="{{ url('host/plan/' . $currentSpace->id) }}"><i class="fa fa-link"></i> <span>プラン</span></a>
				</li>
			<?php endif }}
			<?php if ($currentSpace->input_status >= App\Space::INPUT_STATUS_COMPLETE) : ?>
				<!--
				<li class="">
					<a href="{{ url('host/space/edit-option/' . $currentSpace->id) }}"><i class="fa fa-link"></i> <span>オプション</span></a>
				</li>
				-->
			<?php endif }} */ ?>
			<li class="header">施設管理</li>
			<li class=""><a href="{{ route('host.facility.index') }}"><i class="fa fa-link"></i> <span>施設一覧</span></a></li>
			<li class=""><a href="{{ route('host.facility.new') }}"><i class="fa fa-link"></i> <span>新規施設の作成</span></a></li>
			<li class="header">スペース管理</li>
			<li class=""><a href="{{ url('host/space') }}"><i class="fa fa-link"></i> <span>スペース一覧</span></a></li>
			<li class=""><a href="{{ url('host/space/edit-institution') }}"><i class="fa fa-link"></i> <span>新規スペースの作成</span></a></li>
			<li class="header">スペースオーナー情報</li>
			<li class=""><a href="{{ url('host/account/edit-basic') }}"><i class="fa fa-link"></i> <span>基本情報</span></a></li>
			<li class=""><a href="{{ url('host/account/edit-address') }}"><i class="fa fa-link"></i> <span>住所</span></a></li>
			<li class=""><a href="{{ url('host/account/edit-bank') }}"><i class="fa fa-link"></i> <span>振込口座</span></a></li>
			<li class="header"></li>
			<li class=""><a href="javascript:void(0)" onClick="opener.location.href='/';window.open('about:blank','_self').close();"><i class="fa fa-link"></i> <span>サイトトップに戻る</span></a></li>
			<li class=""><a href="{{ url('mypage') }}"><i class="fa fa-link"></i> <span>マイページに戻る</span></a></li>
			<li class=""><a href="{{ url('host') }}"><i class="fa fa-link"></i> <span>スペースオーナー<br>　管理画面切り替え</span></a></li>
        	</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>