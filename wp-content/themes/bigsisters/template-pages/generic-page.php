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
		<?php the_title( '<h1>', '</h1>' ); ?>
		</header>

	<?php
	    // TO SHOW THE PAGE CONTENTS
	    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			<section class="container involved-copy">
	            <?php the_content(); ?> <!-- Page Content -->
	      </section><!-- .entry-content-page -->

	    <?php
	    endwhile; //resetting the page loop
	    wp_reset_query(); //resetting the page query
	    ?>

	</main> <!-- #main -->
</div> <!-- #primary -->

<?php get_footer(); ?>
