@extends('mypage.layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/top.css">
<style>
.title1 {
	margin: 50px 0;
	padding: 12px 16px;
	width: 100%;
	max-width: 480px;
	display: block;
	font-size: 32px;
	color: #ffffff;
	font-weight: normal;
	background-color: #000000;
	text-align: center;
}
</style>
<center>
<h1 class="title1">
	coming soon
</h1>
<h2>会員登録がお済みの方はサイトオープン前にマイページよりプロフィールの編集を行うことができます。</h3>
</center>
<section class="white" id="news">
	<h2>Topics &amp; News</h2>
	<?php global $post; ?>
	<?php $query = my_topics_query(10); ?>
	<?php if ($query->have_posts()) : ?>
		<ul class="news">
			<div class="case_study_wrap">
				<?php while ($query->have_posts()) : $query->the_post(); // ループ処理 ?>
					<li>
						<span><?php echo the_time('Y.m.d'); ?></span>
						<?php if (my_is_new($post)) : ?>
							<span class="new">NEW</span>
						<?php endif; ?>
						<a href="<?php the_permalink(); ?>"><?php echo get_the_title($post->ID); ?></a>
					</li>
				<?php endwhile; ?>
			</div>
		</ul>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<?php global $post; ?>
	<?php $query = my_news_query(3); ?>
	<?php if ($query->have_posts()) : ?>
		<div class="news_card">
		<ul>
			<?php global $post; ?>
			<?php $query = my_news_query(3); ?>
			<?php if ($query->have_posts()) : ?>
				<?php while ($query->have_posts()) : $query->the_post(); // ループ処理 ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<div class="img">
								<?php $image = get_field('main_image'); ?>
								<img src="<?php echo $image['sizes']['medium']; ?>" alt="">
								<?php if (my_is_new($post)) : ?>
									<span class="card_new"><span>NEW</span></span>
								<?php endif; ?>
							</div>
						</a>
						<div class="text">
							<span class="date"><?php echo the_time('Y.m.d'); ?></span>
							<p class="bold"><?php echo get_the_title($post->ID); ?></p>
                            <p><?php echo get_the_excerpt($post->ID); ?></p>
							<a class="readmore" href="<?php the_permalink(); ?>">続きを読む</a>
						</div>
					</li>
				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		</ul>
			<!--<a class="archive_link" href="">News一覧を見る &raquo;</a>-->
		</div>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

</section>
@stop
