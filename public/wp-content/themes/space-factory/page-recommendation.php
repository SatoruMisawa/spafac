<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Space_Factory
 */

get_header(); ?>

	<div class="hero-image">&nbsp;</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		
			<div class="recomend-list">
				<?php 
					query_posts( array(
						'post_type' => 'recommend',
						'posts_per_page' => '12',
						'order' => 'ASC',
						'paged' => get_query_var( 'paged' )
					) );
				
					if ( have_posts() ) :  // 投稿がある場合
						while ( have_posts() ) : the_post();?>
						
											<div class="recomend-list__recommend">
												<?php
					                                if (has_post_thumbnail()) {
					                                    echo get_the_post_thumbnail($post->ID, 'full', 'class=object-fit-img');
					                                } else {
					                                    echo '<img class="object-fit-img">';
					                                } ?>
					                        </div>
				
						<?php endwhile; ?>
				
					<?php else : // 投稿がない場合
						echo "投稿はありません";
					endif;
					wp_reset_query();
				?>
				
			</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
