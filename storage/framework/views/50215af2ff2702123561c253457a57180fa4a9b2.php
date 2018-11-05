<header>
	<div class="inner">
		<div id="nav-drawer" class="pc_hide">
			<input id="nav-input" type="checkbox" class="nav-unshown"> <label class="menu-trigger" for="nav-input"><span></span> <span></span> <span></span></label>      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
			<div id="nav-content">
			<ul>
				<li><a href="<?php echo url('guide'); ?>">ご利用ガイド</a></li>
				<li><a href="<?php echo url('help'); ?>">ヘルプ</a></li>
				<li><a href="<?php echo url('inquiry'); ?>">お問い合わせ</a></li>
				<li><a href="<?php echo url('host'); ?>">スペースをお持ちの方</a></li>
				<?php if(Auth::check()): ?>
					<li><a href="<?php echo url('mypage'); ?>">マイページ</a></li>
					<li><a href="<?php echo url('logout'); ?>">ログアウトaaa</a></li>
				<?php else: ?>
					<li><a href="<?php echo url('login'); ?>">ログイン</a></li>
				<?php endif; ?>
			</ul>
			</div>
		</div>
		<div class="head_l cf">
		<div class="logo"><a href="<?php echo url('/'); ?>"><img src="<?php echo url('assets/mypage/img/logo-top.png'); ?>" alt=""></a></div>
            
			<nav class="sp_hide">
			<ul>
				<li><a href="<?php echo url('guide'); ?>">ご利用ガイド</a></li>
				<li><a href="<?php echo url('help'); ?>">ヘルプ</a></li>
				<li><a href="<?php echo url('inquiry'); ?>">お問い合わせ</a></li>
				<li><a href="<?php echo url('host'); ?>">スペースをお持ちの方</a></li>
				<?php if(Auth::guard('users')->check()): ?>
					<li><a href="<?php echo url('mypage'); ?>" onclick="window.open(this.href, 'mypage', 'width=1100, height=640, menubar=no, toolbar=no, scrollbars=yes'); return false;">マイページ</a></li>
					<li><a href="<?php echo url('logout'); ?>">ログアウト</a></li>
				<?php else: ?>
					<li><a href="<?php echo url('login'); ?>">ログイン</a></li>
				<?php endif; ?>
			</ul>
			</nav>
		</div>
	</div>
</header>