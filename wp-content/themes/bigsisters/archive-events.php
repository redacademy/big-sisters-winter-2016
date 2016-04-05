<?php
/**
 * The template for displaying archive pages.
 *
 * @package Big_Sisters_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<div class="events">

			<section class="premier-events container">
				<?php if ( have_posts() ) : ?>

					<header class="page-header-style">
						<h1>Premier Events</h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php query_posts( array( 'events_tax' => 'premier', 'showposts' => 3 ) ); ?>
					<ul>
						<?php while ( have_posts() ) : the_post(); ?>
							<li>
									<?php if (has_post_thumbnail() ) : ?>
										<div class="event-thumbnail">
											<div class="thumb-img-div">
												<?php the_post_thumbnail('large'); ?>
											</div>
										</div> <!-- .event-thumbnail -->
									<?php endif; ?>
									<div class="event-content">
										<h3> <?php the_title(); ?></h3>
										<?php the_excerpt(); ?>
										<a href="<?php the_permalink(); ?>">
											<button class="learn-more button-white" type="button" name="learn-more">Learn More</button>
										</a>
									</div> <!-- .event-content -->
							</li>
						<?php endwhile; ?>
					</ul>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</section> <!-- .premier-events -->

			<section class="partner-events container">
				<?php if ( have_posts() ) : ?>

					<h2>Partner Events</h2>

					<?php /* Start the Loop */ ?>
					<?php query_posts( array( 'events_tax' => 'partner', 'showposts' => 2 ) ); ?>
					<ul>
						<?php while ( have_posts() ) : the_post(); ?>
							<li>
								<?php if (has_post_thumbnail() ) : ?>
									<div class="event-thumbnail">
										<div class="thumb-img-div">
											<?php the_post_thumbnail('large'); ?>
										</div>
									</div> <!-- .event-thumbnail -->
								<?php endif; ?>
								<div class="event-content">
									<h3> <?php the_title(); ?></h3>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>">
										<button class="learn-more button-white" type="button" name="learn-more">Learn More</button>
									</a>
								</div> <!-- .event-content -->
							</li>
						<?php endwhile; ?>
					</ul>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</section> <!-- .partner-events -->

			<section class="host-fundraiser-event">
				<div class="container">
					<h2>Want to host a fundraiser or event?</h2>
					<a href="/bigsisters/host-a-fundraising-event/">
						<button class="learn-more button-white" type="button" name="learn-more">Learn More</button>
					</a>
				</div>
			</section>

			<section class="to-donate-sponsor">
				<h2>Want to sponsor or donate to an event?</h2>
				<p>Please contact our manager of Corporate and Foundation giving</p>
				<div class="donor-contact">
					<div class="name-number-wrap">
						<span>Fleur Cooper</span>
						<span>604-873-4525 ext. 317</span>
					</div> <!-- .name-number-up -->
					<span>Fcooper@BigSisters.bc.ca</span>
				</div> <!-- .donor-contact -->
			</section>

			<hr>

		</div> <!-- .events -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
