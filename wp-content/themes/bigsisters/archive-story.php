<?php
/**
* The template for displaying testimonials archive.
*
* @package RED_Starter_Theme
*/

get_header(); ?>
<h1>Success Stories archive</h1>
<div id="primary" class="content-area">
	<main id="main" class="site-main content-wrapper" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<!-- <h1>Our products are made fresh daily</h1> -->
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<p>We are a team of creative and talented individuals who love making delicious treats.</p>
				<hr class="fancy-hr">

			</header><!-- .page-header -->

			<?php $terms = get_terms('success_story_tax'); ?>
			<div class="sect-type-archive">
				<?php if(!empty($terms)) : ?>
					<?php foreach($terms as $term) : ?>
						<div class="prod-types">
							<a href="<?php echo get_term_link( $term ); ?>">
								<img src="<?php echo get_template_directory_uri().'/images\/'.$term->slug; ?>.png" alt="" />
								<h3><?php echo $term -> name; ?></h3>
							</a>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<div class="prod-grid">
				<?php /* Start the Loop */ ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="prod-square">

						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						<?php endif; ?>
						<div class="prod-meta">
							<span class="prod-title"><?php the_title(); ?></span>
							<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
						</div>

					</div>
				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
