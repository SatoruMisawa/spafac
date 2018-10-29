<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); // ループ処理 ?>
		<section class="gray" id="welcome">
			<div class="welcome_title">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
