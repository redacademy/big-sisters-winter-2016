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

			<section class="upcoming-events-section">
				<h2 class="current-mentor-title">Upcoming Big and Little Events</h1>
				<p>
					Check out these events happening in our own community! These are great
					ideas to do with your Little for the upcoming weeks!
				</p>

				<div class="mentor-article-one">
					<img class="article-one-image" src="<?php echo CFS()->get( 'article_one_image' ); ?>">
					<p class="event-one-date"><?php echo esc_html(CFS()->get( 'event_one_date' ) ); ?></p>
					<p class="event-one-title"><?php echo esc_html(CFS()->get( 'event_one_title' ) ); ?></p>
					<p class="event-one-description"><?php echo esc_html(CFS()->get( 'event_one_description' ) ); ?></p>
				</div>

				<div class="mentor-article-two">
					<img class="article-two-image" src="<?php echo CFS()->get( 'article_two_image' ); ?>">
					<p class="event-two-date"><?php echo esc_html(CFS()->get( 'event_two_date' ) ); ?></p>
					<p class="event-two-title"><?php echo esc_html(CFS()->get( 'event_two_title' ) ); ?></p>
					<p class="event-two-description"><?php echo esc_html(CFS()->get( 'event_two_description' ) ); ?></p>
				</div>

				<div class="mentor-article-three">
					<img class="article-three-image" src="<?php echo CFS()->get( 'article_three_image' ); ?>">
					<p class="event-three-date"><?php echo esc_html(CFS()->get( 'event_three_date' ) ); ?></p>
					<p class="event-three-title"><?php echo esc_html(CFS()->get( 'event_three_title' ) ); ?></p>
					<p class="event-three-description"><?php echo esc_html(CFS()->get( 'event_three_description' ) ); ?></p>
				</div>

				<div class="mentor-article-four">
					<img class="article-four-image" src="<?php echo CFS()->get( 'article_four_image' ); ?>">
					<p class="event-four-date"><?php echo esc_html(CFS()->get( 'event_four_date' ) ); ?></p>
					<p class="event-four-title"><?php echo esc_html(CFS()->get( 'event_four_title' ) ); ?></p>
					<p class="event-four-description"><?php echo esc_html(CFS()->get( 'event_four_description' ) ); ?></p>
				</div>
			</section>

			<h2 class="articles-resources-title">Articles and Resources</h1>

			<section class="ar-menu-sections">
				<a href="#">
						<div>
								<div class="icon-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/healthy-eating-icon.png" alt="Big Sisters Healthy Eating Resource">
								</div>
								<p>Eating Healthy</p>
						</div>
				</a>
				<a href="#">
						<div>
								<div class="icon-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/lgtb-icon.png" alt="Big Sisters LGTB Resource">
								</div>
								<p>LGBT Youth</p>
						</div>
				</a>
				<a href="#">
						<div>
								<div class="icon-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/fitting-in-icon.png" alt="Big Sisters Fitting In Resource">
								</div>
								<p>Fitting In</p>
						</div>
				</a>
				<a href="#">
						<div>
								<div class="icon-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/grief-icon.png" alt="Big Sisters Grief Resource">
								</div>
								<p>Grief</p>
						</div>
				</a>
				<a href="#">
						<div>
								<div class="icon-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/pregnancy-icon.png" alt="Big Sisters Pregnancy Resource">
								</div>
								<p>Pregnancy</p>
						</div>
				</a>
				<a href="#">
						<div>
								<div class="icon-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/hiv-icon.png" alt="Big Sisters HIV Resource">
								</div>
								<p>Eating Healthy</p>
						</div>
				</a>
			</section>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
