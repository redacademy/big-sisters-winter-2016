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
				<p class="story-title"><?php the_title(); ?></p>
				<p class="story-subhead"><?php echo CFS()->get('subhead')?></p>
				<p><span class="story-excerpt"> <?php the_excerpt(); ?></span></p>
				<div class="story-more">
					<p><?php echo CFS() -> get('story')?></p>
				</div>
				<a href="<?php the_permalink() ?>"><button class="button-white">Read More</button></a>
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		<!-- more stories -->
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>

			<?php $my_query = new WP_Query( 'post_type=story&&showposts=10' ); ?>
				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
	<!-- Do special_cat stuff... -->
					<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
				<?php endwhile; ?>
			<!-- <?php while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
			<?php endwhile; ?> -->
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
