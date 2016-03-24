<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">
<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

      	<header class="entry-header">
      		<img src="<?php echo CFS() -> get('picture') ?>" />
      	</header><!-- .entry-header -->

      	<div class="entry-content">
					<div class="prod-price"><?php echo CFS()->get( 'story' ); ?></div>

      		<?php the_content(); ?>
      	</div><!-- .entry-content -->


      </article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
