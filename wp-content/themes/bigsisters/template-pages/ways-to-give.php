<?php
/**
* Template Name: Ways to Give
**/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="page-hero">
		<?php $fields = CFS()->get( 'hero_content' );
		foreach ( $fields as $field ) : ?>
			<img src="<?php echo $field['hero_image']; ?>" alt="Ways To Give Hero Image" />
			<div class="hero-quote">
				<?php echo $field['hero_quote']; ?>
			</div>
		<?php endforeach; ?>
		</section>

	<section class="container">
		<h1 class="refer-title"><?php echo CFS()->get('page_title'); ?></h1>
		<?php echo CFS()->get('introduction_paragraph'); ?>
	</section>

	<section class="give-flex">
		<ul>
			<?php
			$loop = CFS()->get('ways_to_give');
			foreach($loop as $row) : ?>
			<li>
				<div class="container">
					<div class="donate-icon">
						<img src="<?php echo $row['donate_icon']; ?>" alt="<?php echo esc_html(CFS()->get( 'donate_icon_description' ) ); ?>"/>
					</div>
					<div class="donate-option-description">
						<h2><?php echo $row['donate_title']; ?></h2>
						<p><?php echo $row['donation_description']; ?></p>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
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
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
