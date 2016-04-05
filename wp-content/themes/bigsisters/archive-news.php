<?php
/**
 * The template for displaying archive pages.
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

			<section class="container story-page-copy">
				<?php /* Start the Loop */ ?>
				<ul class="news">
					<?php while ( have_posts() ) : the_post(); ?>
						<li>
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="story-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
							<?php endif; ?>
							<div class="story-block">
								<p class="news-date"><?php echo date( 'F j, Y', strtotime( CFS()->get('date') ) );?></p>
								<?php the_title('<h2 class="news-title">', '</h2>'); ?>
									<p><?php echo CFS()->get('excerpt')?></p>

								<div class="story-box">
									<div class="story-box-div">
										<div class="story-box-content">
											<div class="story-more">
												<?php echo CFS() -> get('full_article')?>
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
								<h3>Older Stories</h3>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content container">
								<?php
								$args = array('post_type' => 'news', 'order' => 'ASC', 'posts_per_page' => -1);
								$all_news = get_posts( $args );
								?>
								<?php if ( have_posts() ) : ?>
								<?php foreach($all_news as $post) : setup_postdata( $post ); ?>
									<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
								<?php endforeach; wp_reset_postdata(); ?>
								<?php else : ?>
								<?php get_template_part( 'template-parts/content', 'none' ); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
