<?php
/**
* The template for displaying testimonials archive.
*
* @package RED_Starter_Theme
*/

get_header(); ?>
<div id="primary" class="content-area container stories-copy">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="story-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
				<?php endif; ?>
				<img src="<?php echo CFS()->get('picture') ?>" />
				<p><?php echo CFS()->get('name') ?></p>
				<p><?php echo CFS()->get('position') ?></p>
				<p><a href="mailto:<?php echo CFS()->get('email') ?>"><?php echo CFS()->get('email') ?></a></p>
				<p><?php echo CFS()->get('summary') ?></p>

			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
