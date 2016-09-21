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
				<?php if ( $field['hero_image_link'] ) : ?>
				<a href="<?php echo $field['hero_image_link']; ?>"><img src="<?php echo $field['hero_image']; ?>" alt="Donation Hero Image" /></a>
			<?php else: ?>
				<img src="<?php echo $field['hero_image']; ?>" alt="Donation Hero Image" />
			<?php endif; ?>
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

			<?php
					$id =  608;
					$post = get_post( $id );
					?>
				<?php get_template_part('template-pages/events-contact'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
