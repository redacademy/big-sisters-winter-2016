<?php
/**
* The template for displaying Sponsors archive.
*
* @package Big_Sisters_Theme
*/

get_header(); ?>
<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-header-style">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<section class="container">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<img src="<?php echo CFS()->get('sponsor') ?>" />
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
</section>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
