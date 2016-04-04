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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title( '<h1 class="page-header-style">', '</h1>' ); ?>

      	<header class="entry-header">
      		<?php if ( has_post_thumbnail() ) : ?>
      			<?php the_post_thumbnail( 'large' ); ?>
      		<?php endif; ?>
      	</header><!-- .entry-header -->

      	<div class="entry-content">
					<p class="news-date"><?php echo date( 'F j, Y', strtotime( CFS()->get('date') ) );?></p>
					<?php echo CFS() -> get('full_article')?>
      	</div><!-- .entry-content -->


      </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
