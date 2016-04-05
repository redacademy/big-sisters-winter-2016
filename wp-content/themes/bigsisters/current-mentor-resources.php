<?php
/**
 * Template Name: Current Mentor
 **/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="mentor-hero">
				<p class="little-sister-quote">We <span style="color: red">LOVE</span> our mentors are we're here to support them!</p>
			</section>

			<section class="upcoming-events-section container">
				<header class="cmr-header">
					<h2>Upcoming Big and Little Events</h2>
						<p>
							Check out these events happening in our own community! These are great
							ideas to do with your Little for the upcoming weeks!
						</p>
				</header>

				<div class="mentor-article">
					<img class="article-one-image" src="<?php echo CFS()->get( 'article_one_image' ); ?>" alt="<?php echo esc_html(CFS()->get( 'article_image_one_description' ) ); ?>">
						<div class="ma-content">
							<p class="event-date"><?php echo esc_html(CFS()->get( 'event_one_date' ) ); ?><br/>
																		<span class="cmr-color"><?php echo esc_html(CFS()->get( 'event_one_title' ) ); ?></span></p>
							<p class="event-description"><?php echo esc_html(CFS()->get( 'event_one_description' ) ); ?></p>
						</div>
				</div>

				<div class="mentor-article">
					<img class="article-two-image" src="<?php echo CFS()->get( 'article_two_image' ); ?>" alt="<?php echo esc_html(CFS()->get( 'quote_image_two_description' ) ); ?>">
						<div class="ma-content">
							<p class="event-date"><?php echo esc_html(CFS()->get( 'event_two_date' ) ); ?><br/>
																		<span class="cmr-color"><?php echo esc_html(CFS()->get( 'event_two_title' ) ); ?></span></p>
							<p class="event-description"><?php echo esc_html(CFS()->get( 'event_two_description' ) ); ?></p>
						</div>
				</div>

				<div class="mentor-article">
					<img class="article-three-image" src="<?php echo CFS()->get( 'article_three_image' ); ?>" alt="<?php echo esc_html(CFS()->get( 'quote_image_three_description' ) ); ?>">
						<div class="ma-content">
							<p class="event-date"><?php echo esc_html(CFS()->get( 'event_three_date' ) ); ?><br/>
																		<span class="cmr-color"><?php echo esc_html(CFS()->get( 'event_three_title' ) ); ?></span></p>
							<p class="event-description"><?php echo esc_html(CFS()->get( 'event_three_description' ) ); ?></p>
						</div>
				</div>

				<div class="mentor-article">
					<img class="article-four-image" src="<?php echo CFS()->get( 'article_four_image' ); ?>" alt="<?php echo esc_html(CFS()->get( 'quote_image_four_description' ) ); ?>">
						<div class="ma-content">
							<p class="event-date"><?php echo esc_html(CFS()->get( 'event_four_date' ) ); ?><br/>
																		<span class="cmr-color"><?php echo esc_html(CFS()->get( 'event_four_title' ) ); ?></span></p>
							<p class="event-description"><?php echo esc_html(CFS()->get( 'event_four_description' ) ); ?></p>
						</div>
				</div>
			</section>

			<section class="art-resc-title container">
				<h2>Articles and Resources</h2>
			</section>

				<ul class="ar-grid container">
					<li class="grid-icon">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/healthy-eating-icon.png" alt="Big Sisters Healthy Eating Resource"><br/>Healthy Eating</a>
					</li>
					<li class="grid-icon">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/lgtb-icon.png" alt="Big Sisters LGTB Resource"><br/>LGTB Youth</a>
					</li>
					<li class="grid-icon">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/fitting-in-icon.png" alt="Big Sisters Fitting In Resource"><br/>Fitting In</a>
					</li>
					<li class="grid-icon">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/grief-icon.png" alt="Big Sisters Grief Resource"><br/>Grief</a>
					</li>
					<li class="grid-icon">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/pregnancy-icon.png" alt="Big Sisters Pregnancy Resource"><br/>Teenage Pregnancy</a>
					</li>
					<li class="grid-icon">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentor-resources-images/hiv-icon.png" alt="Big Sisters HIV Resource"><br/>HIV</a>
					</li>
				</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
