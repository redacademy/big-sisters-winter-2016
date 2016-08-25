<?php
/**
* Template Name: Generic Page
**/
get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

				<section class="page-hero">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</section>

		<header class="container involved-copy">
		<?php the_title( '<h1 class="refer-title">', '</h1>' ); ?>
		</header>

	<?php
	    while ( have_posts() ) : the_post(); ?>
			<section class="container involved-copy">
	            <?php the_content(); ?>
	      </section>

	    <?php
	    endwhile;
	    wp_reset_query();
	    ?>

	</main> <!-- #main -->
</div> <!-- #primary -->

<?php get_footer(); ?>
