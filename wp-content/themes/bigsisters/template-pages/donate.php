<?php
/**
 * Template Name: Donate Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php $fields = CFS()->get( 'hero_content' );
			foreach ( $fields as $field ) : ?>
			<section class="page-hero">
				<img src="<?php echo $field['hero_image']; ?>" alt="Current Mentor Resource Hero Image" />
					<div class="hero-quote">
					<?php echo $field['hero_quote']; ?>
			</div>
			</section>
			<?php endforeach; ?>

            <section class="why-donate container">
                <h1>Why Donate to Big Sisters</h1>
                <p><?php echo CFS()->get('why_donate'); ?></p>
            </section>

			<?php include_once(trailingslashit( get_template_directory() ).'inc/otherways.php'); ?>

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
