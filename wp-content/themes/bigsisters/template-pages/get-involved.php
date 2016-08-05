<?php
/**
* Template Name: Get Involved
**/
get_header();?>

	<header class="container story-page-copy">
		<?php the_title( '<h1 class="page-header-style">', '</h1>' ); ?>

	</header>
	<section class="container involved-copy">
		<?php include_once(trailingslashit( get_template_directory() ).'/inc/initatives.php'); ?>
	</section>
	<!-- other volunteer opportunities -->
	<section class="container involved-copy">
		<div class="accordian-box">
			<div class="acr-box-div">
				<div class="info-panel-content">
					<p><span class="step-color">Other Volunteer Opportunities</span></p>

					<i class="fa fa-plus-circle"></i>
				</div>
				<div class="acr-box-content container">
					<?php
					$include = get_pages('include=415');
					$content = apply_filters('the_content',$include[0]->post_content);
					echo $content;
					?>
				</div>
			</div>
		</div>
	</section>
		<!-- Career opportunities -->
		<section class="container involved-copy">
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<p><span class="step-color">Career Opportunities</span></p>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content container">
						<?php
						$args = array('post_type' => 'career', 'posts_per_page' => -1);
						$all_careers = get_posts( $args );
						?>
						<?php if ( have_posts() ) : ?>
							<?php foreach($all_careers as $post) : setup_postdata( $post ); ?>
								<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
							<?php endforeach; wp_reset_postdata(); ?>
						<?php else : ?>
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

		<!-- Refer a Little Sisiter -->
		<section class="page-hero">
			<h2 class="involved-header">Refer A Little Sister</h2>
			<img src="<?php echo CFS()->get('hero_image'); ?>" alt="Read more Big Sisters Success Stories" />
			<div class="hero-quote">
				<?php echo CFS()->get('hero_quote'); ?>
			</div>
		</section>

		<!-- Other ways to get involved -->
		<?php include_once(trailingslashit( get_template_directory() ).'inc/otherways-involved.php'); ?>

		<!-- Sponsor thank you -->
		<section class="container">
			<?php include_once(trailingslashit( get_template_directory() ).'inc/sponsor-grid.php'); ?>
		</section>
	</main> <!-- #main -->
</div> <!-- #primary -->

<?php get_footer(); ?>
