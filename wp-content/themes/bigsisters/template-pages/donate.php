<?php
/**
 * Template Name: Donate Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="hero-dp">
                <p>
                    It costs $2000/year to sponsor one Little Sister mentorship. Our  donors make this happen.
                </p>
                <a href="#"><button class="button-brightblue">Donate Now</button></a>
            </section>
            <section class="why-donate">
                <h1>Why Donate to Big Sisters</h1>
                <p><?php echo CFS()->get('why_donate'); ?></p>
            </section>

			<?php include_once('inc/otherways.php'); ?>

            <section class="to-donate-sponsor">
                <h1>Want to sponsor or donate to an event?</h1>
                <p>Please contact our manager of Corporate and Foundation giving</p>
                <div class="donor-contact">
					<div class="name-number-wrap">
                    	<span><?php echo CFS()->get('donation_manager_name'); ?></span>
                    	<span><?php echo CFS()->get('manager_phone'); ?></span>
					</div>
                    <span><?php echo CFS()->get('manager_email'); ?></span>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
