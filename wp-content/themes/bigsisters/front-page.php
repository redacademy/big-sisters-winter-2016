<?php
/**
* Template Name: Front Page
*/
get_header();
$directory = get_template_directory_uri();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section class="hero-slider">
			<ul class="hero-carousel">
				<?php $fields = CFS()->get( 'hero_content' );
				foreach ( $fields as $field ) : ?>
				<li class="hero-carousel-cell page-hero">
					<?php if ( $field['hero_image_link'] ) : ?>
						<a href="<?php echo $field['hero_image_link']; ?>"><img src="<?php echo $field['hero_image']; ?>" alt="Big Sisters Feature Story" /></a>
					<?php else: ?>
						<img src="<?php echo $field['hero_image']; ?>" alt="Big Sisters Feature Story" />
					<?php endif; ?>

					<div class="container">
						<div class="hero-quote">
							<?php echo $field['hero_quote']; ?>
						</div>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
	<section class="colored-menu-sections">
		<a href="/get-involved/">
			<div class="colored-menu">
				<div class="icon-container">
					<img src="<?php echo $directory; ?>/assets/images/icons/hands-up-icon.png"
					alt="Big Sisters Becoming a Mentor">
				</div>
				<p>Becoming a Mentor</p>
			</div>
		</a>
		<a href="/refer-a-little/">
			<div class="colored-menu">
				<div class="icon-container">
					<img src="<?php echo $directory; ?>/assets/images/icons/two-girls-icon.png"
					alt="Big Sisters Refer a Little">
				</div>
				<p>Refer A Little</p>
			</div>
		</a>
		<a href="/events/">
			<div class="colored-menu">
				<div class="icon-container">
					<img src="<?php echo $directory; ?>/assets/images/icons/events-calendar-icon.png"
					alt="Big Sisters Events">
				</div>
				<p>Events</p>
			</div>
		</a>
	</section>
	<section class="newsletter">
		<h1>Sign Up for Big Sisters Newsletter</h1>
		<?php echo do_shortcode( '[contact-form-7 id="525" title="Newsletter Sign-up Form"]' ); ?>
	</section>
	<section class="tri-img-grid container">
		<div class="tri-img">
			<img src="<?php echo CFS()->get('hero1_img');?>"
			alt="<?php echo wp_strip_all_tags(CFS()->get('hero1_quote'));?>"/>
			<div class="tri-img-quote container">
				<?php echo CFS()->get('hero1_quote');?>
			</div>
		</div>
		<div class="tri-img">
			<img src="<?php echo CFS()->get('hero2_img');?>"
			alt="<?php echo wp_strip_all_tags(CFS()->get('hero2_quote'));?>"/>
			<div class="tri-img-quote container">
				<?php echo CFS()->get('hero2_quote');?>
			</div>
		</div>
		<div class="tri-img">
			<img src="<?php echo CFS()->get('hero3_img');?>"
			alt="<?php echo wp_strip_all_tags(CFS()->get('hero3_quote'));?>"/>
			<div class="tri-img-quote container">
				<?php echo CFS()->get('hero3_quote');?>
			</div>
		</div>
	</section>
	<section class="fp-recent-donors">
		<h1>Thank you to our recent donors</h1>
		<ul class="main-carousel">
			<?php $fields = CFS()->get( 'donation_information' );
			foreach ( $fields as $field ) : ?>
			<li class="carousel-cell individual-donor">
				<h3 class="donor-name"><?php echo $field['donor_name']; ?></h3>
				<p class="donation-amount"><?php echo $field['donation_amount']; ?></p>
				<p class="program-type"><?php echo $field['program_name']; ?></p>
				<p class="sponsor-level"><?php echo $field['additional_information']; ?></p>
			</li>
		<?php endforeach; ?>
	</ul>
</section>
<section class="program-sponsors">
		<?php
		$upload_path = content_url() . '/uploads/';
		$loop = CFS()->get('new_sponsor_section');
		foreach($loop as $row) : ?>
		<h1><?php echo $row['section_title']; ?></h1>
		<ul>

		<?php foreach($row['new_logos'] as $logos) : ?>
			<?php $logo_image_ID = $logos['company_logo']; ?>
			<?php $logo_image_ALT = get_post_meta($logo_image_ID, '_wp_attachment_image_alt', true); ?>
			<?php $logo_image_URL_data = wp_get_attachment_metadata($logo_image_ID, true); ?>
			<?php $logo_image_URL = $logo_image_URL_data['file']; ?>
			<li class="sponsor-logo-wrap">
				<a href="<?php echo $logos['company_website']; ?>" target="_blank" >
					<img src="<?php echo $upload_path . $logo_image_URL; ?>" alt="<?php echo get_post_meta($logos['sponsor_logo'], '_wp_attachment_image_alt', true)?>" />
				</a>
			</li>
		<?php endforeach; ?>
	<?php endforeach; ?>
</ul>

</section>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
