<?php
/**
 * Template Name: Current Mentor
 **/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="mentor-hero">
				<p class="metor-hero-quote">We LOVE our mentors are we're here to support them!</p>
			</section>

			<section class="upcoming-events-section container">
				<header class="cmr-header">
					<h3>Upcoming Big and Little Events</h3>
						<p>
							Check out these events happening in our own community! These are great
							ideas to do with your Little for the upcoming weeks!
						</p>
				</header>

				<div class="mentor-article">
					<img class="article-one-image" src="<?php echo CFS()->get( 'article_one_image' ); ?>">
					<p class="event-date"><?php echo esc_html(CFS()->get( 'event_one_date' ) ); ?></br>
																<?php echo esc_html(CFS()->get( 'event_one_title' ) ); ?></p>
					<p class="event-description"><?php echo esc_html(CFS()->get( 'event_one_description' ) ); ?></p>
				</div>

				<div class="mentor-article">
					<img class="article-two-image" src="<?php echo CFS()->get( 'article_two_image' ); ?>">
					<p class="event-date"><?php echo esc_html(CFS()->get( 'event_two_date' ) ); ?><br/>
																<?php echo esc_html(CFS()->get( 'event_two_title' ) ); ?></p>
					<p class="event-description"><?php echo esc_html(CFS()->get( 'event_two_description' ) ); ?></p>
				</div>

				<div class="mentor-article">
					<img class="article-three-image" src="<?php echo CFS()->get( 'article_three_image' ); ?>">
					<p class="event-date"><?php echo esc_html(CFS()->get( 'event_three_date' ) ); ?><br/>
																<?php echo esc_html(CFS()->get( 'event_three_title' ) ); ?></p>
					<p class="event-description"><?php echo esc_html(CFS()->get( 'event_three_description' ) ); ?></p>
				</div>

				<div class="mentor-article">
					<img class="article-four-image" src="<?php echo CFS()->get( 'article_four_image' ); ?>">
					<p class="event-date"><?php echo esc_html(CFS()->get( 'event_four_date' ) ); ?></br>
																<?php echo esc_html(CFS()->get( 'event_four_title' ) ); ?></p>
					<p class="event-description"><?php echo esc_html(CFS()->get( 'event_four_description' ) ); ?></p>
				</div>
			</section>

			<section class="ar-menu-sections">
				<h3>Articles and Resources</h3>
				<ul class="ar-grid">
					<div class="grid-icon">
						<a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/healthy-eating-icon.png" alt="Big Sisters Healthy Eating Resource"></li></a>
					</div>
					<div class="grid-icon">
						<a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/lgtb-icon.png" alt="Big Sisters LGTB Resource"></li></a>
					</div>
					<div class="grid-icon">
						<a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/fitting-in-icon.png" alt="Big Sisters Fitting In Resource"></li></a>
					</div>
					<div class="grid-icon">
						<a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/grief-icon.png" alt="Big Sisters Grief Resource"></li></a>
					</div>
					<div class="grid-icon">
						<a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/pregnancy-icon.png" alt="Big Sisters Pregnancy Resource"></li></a>
					</div>
					<div class="grid-icon">
						<a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/hiv-icon.png" alt="Big Sisters HIV Resource"></li></a>
					</div>
				</ul>
			</section>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
