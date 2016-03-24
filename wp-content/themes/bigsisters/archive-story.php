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

				<div class="story-box">
					<div class="story-box-div">
						<div class="story-box-content">
							<div class="story-more">
								<p><?php echo CFS() -> get('story')?></p>
							</div>
						</div>
						<div class="story-panel-content">
							<div class="button-white">Read More</div>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		<!-- more stories -->
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						More Stories
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content">
						<?php if ( have_posts() ) : ?>
							<?php /* Start the Loop */ ?>
							<?php $my_query = new WP_Query( 'post_type=story&&showposts=15' ); ?>
							<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
								<!-- Do special_cat stuff... -->
								<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
							<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="initiative-block">
			<div class="initiative-logo">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/initiatives/big-sisters-mentor.jpg" alt="Become a Big Sisters Mentor" />
		</div>
		<div class="initiative-cta big-sister-mentor">
			<h2>Big Sisters</h2>
			<p>
				2 - 4 Hours/Week<br />
				1 Year Commitment
			</p>
			<button class="button-white">Learn More</button>
		</div>
	</div>

	<div class="initiative-block">
		<div class="initiative-logo">
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/initiatives/study-buddy-mentor.jpg" alt="Become a Study Buddy" />
	</div>
	<div class="initiative-cta study-buddy-mentor">
		<h2>Study Buddy</h2>
		<p>
			1 Hour/Week<br />
			6 Month Commitment
		</p>
		<button class="button-white">Learn More</button>
	</div>
</div>

<div class="initiative-block">
	<div class="initiative-logo">
		<img src="<?php echo get_template_directory_uri() ?>/assets/images/initiatives/go-girls-mentor.jpg" alt="Become a Go Girls Mentor" />
</div>
<div class="initiative-cta go-girls-mentor">
	<h2>Go Girls</h2>
	<p>
		2 Hours/Week<br />
		8 Week Commitment
	</p>
	<button class="button-white">Learn More</button>
</div>
</div>


</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
