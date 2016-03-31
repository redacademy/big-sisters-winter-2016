<?php
/**
* The template for displaying testimonials archive.
*
* @package Big_Sisters_Theme
*/

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="container story-page-copy">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<section class="container story-page-copy">
				<?php /* Start the Loop */ ?>
				<ul class="success-stories">
					<?php while ( have_posts() ) : the_post(); ?>
						<li>
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="story-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
							<?php endif; ?>
							<div class="story-block">
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
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</section>

		<!-- more stories -->
		<section class="container">
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<h3>More Stories</h3>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content">
						<?php
						$args = array('post_type' => 'story', 'posts_per_page' => -1);
						$all_stories = get_posts( $args );
						?>
						<?php if ( have_posts() ) : ?>
						<?php foreach($all_stories as $post) : setup_postdata( $post ); ?>
							<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
						<?php endforeach; wp_reset_postdata(); ?>
						<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

		<section class="container story-page-copy">
			<?php include_once('inc/initatives.php'); ?>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
