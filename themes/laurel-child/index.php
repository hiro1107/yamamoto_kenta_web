<?php get_header(); ?>

	<?php if(get_theme_mod( 'laurel_featured_slider' ) == true) : ?>
		<?php get_template_part('inc/featured/featured'); ?>
	<?php endif; ?>

	<?php if(get_theme_mod( 'laurel_promo' ) == true) : ?>
		<?php get_template_part('inc/promo/promo'); ?>
	<?php endif; ?>

	<div class="sp-container">

		<div class="sp-row">

			<div id="main" <?php if(get_theme_mod('laurel_sidebar_homepage') == true) : ?>class="fullwidth"<?php endif; ?>>

				<div class="sp-row post-layout <?php if(get_theme_mod('laurel_home_layout') == 'full_grid' && !is_paged()) : ?>full-grid<?php elseif(get_theme_mod('laurel_home_layout') == 'full_grid' && is_paged()) : ?>grid<?php elseif(get_theme_mod('laurel_home_layout') == 'grid') : ?>grid<?php endif; ?>">

				<?php if (is_home()) { query_posts("cat=-[7]"); } ?>	<!-- [2018.10.16 Ichi]「top写真表示用」カテゴリをトップページから非表示にする -->

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php if(get_theme_mod('laurel_home_layout') == 'grid') : ?>

						<?php get_template_part('content', 'grid'); ?>

					<?php elseif(get_theme_mod('laurel_home_layout') == 'full_grid') : ?>

						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>

					<?php elseif(get_theme_mod('laurel_home_layout') == 'list') : ?>

						<?php get_template_part('content', 'list'); ?>

					<?php elseif(get_theme_mod('laurel_home_layout') == 'full_list') : ?>

						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>

					<?php else : ?>

						<?php get_template_part('content'); ?>

					<?php endif; ?>

				<?php endwhile; ?>

					<?php laurel_pagination(); ?>

				<?php endif; ?>

				<!-- END POST LAYOUT ROW -->
				</div>

			</div>

<?php if(get_theme_mod('laurel_sidebar_homepage')) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>