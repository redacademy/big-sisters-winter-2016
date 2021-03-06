<?php
/**
 * The template for displaying all single posts.
 *
 * @package Big_Sisters_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container">
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
			</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
