<?php
/**
 * Template Name: Current Mentor
 **/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="mentor-hero">
				<p class="little-sister-quote">We <span style="color: red">LOVE</span> our mentors and we're here to support them!</p>
			</section>

			<section class="upcoming-events-section container">
				<header class="cmr-header">
					<h1 class="refer-title"><?php echo CFS()->get('page_title'); ?></h1>
					<p>
						<?php echo CFS()->get('introduction_paragraph'); ?>
					</p>
				</header>

			<section class="art-resc-title container">
				<h2>Articles and Resources</h2>
			</section>

			<ul class="ar-grid container">
				<?php
				$upload_path = content_url() . '/uploads/';
				$loop = CFS()->get('resource_categories');
				foreach($loop as $row) : ?>
				<?php $logo_image_ID = $row['category_icon']; ?>
				<?php $logo_image_ALT = get_post_meta($logo_image_ID, '_wp_attachment_image_alt', true); ?>
				<?php $logo_image_URL_data = wp_get_attachment_metadata($logo_image_ID, true); ?>
				<?php $logo_image_URL = $logo_image_URL_data['file']; ?>
				<li class="grid-icon">
					<a href="<?php echo $row['resource_link']; ?>" target="_blank" >
					<img src="<?php echo $upload_path . $logo_image_URL; ?>" alt="<?php echo get_post_meta($row['category_icon'], '_wp_attachment_image_alt', true)?>" />
					<br /><?php echo $row['category_name'] ?>
				</a>
				</li>
			<?php endforeach; ?>
			</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
