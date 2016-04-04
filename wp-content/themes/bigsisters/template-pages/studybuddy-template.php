<?php
/**
* Template Name: Study Buddy Template
**/
get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<header class="container story-page-copy">
			<?php the_title( '<h1 class="page-header-style">', '</h1>' ); ?>
		</header>
<div class="hero-grid container">
		<section class="program-hero">
				<div class="program-hero-img">
					<?php $img_ALT = CFS()->get('hero1_quote'); ?>
					<img src="<?php echo CFS()->get('hero1_img')?>" alt="<?php echo wp_strip_all_tags( $img_ALT ); ?>"/>
				</div>
				<div class="program-quote container">
					<?php echo CFS()->get('hero1_quote')?>
				</div>
		</section>

		<section class="program-hero">
				<div class="program-hero-img">
					<?php $img_ALT = CFS()->get('hero1_quote'); ?>
					<img src="<?php echo CFS()->get('hero2_img')?>" alt="<?php echo wp_strip_all_tags( $img_ALT ); ?>"/>
				</div>
				<div class="program-quote container">
					<?php echo CFS()->get('hero2_quote')?>
				</div>
		</section>

		<section class="program-hero">
				<div class="program-hero-img">
					<?php $img_ALT = CFS()->get('hero1_quote'); ?>
					<img src="<?php echo CFS()->get('hero3_img')?>" alt="<?php echo wp_strip_all_tags( $img_ALT ); ?>"/>
				</div>
				<div class="program-quote container">
					<?php echo CFS()->get('hero3_quote')?>
				</div>
		</section>
</div>
		<!-- Step 1 -->
		<section class="container">
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<h3><span class="step-color">Step 1.</span> General Information</h3>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content">
						<?php echo CFS()->get('step_1')?>
					</div>
				</div>
			</div>
		</section>
		<!-- Step 2 -->
		<section class="container">
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<h3><span class="step-color">Step 2.</span> Requirements</h3>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content">
						<?php echo CFS()->get('step_2')?>
					</div>
				</div>
			</div>
		</section>
		<!-- Step 3 -->
		<section class="container">
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<h3><span class="step-color">Step 3.</span> Apply Now!</h3>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content">
						<?php echo CFS()->get('step_3')?>
					</div>
				</div>
			</div>
		</section>
		<!-- Step 4 -->
		<section class="container">
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<h3><span class="step-color">Step 4.</span> Next Steps</h3>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content">
						<?php echo CFS()->get('step_4')?>
					</div>
				</div>
			</div>
		</section>

		<section class="container">
			<div class="sponsor-grid">
				<h2>Founding Partner</h2>
			<ul>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/raymond_james.gif" alt="Founding Partner Raymond James"/></li>
			</ul>

				<h2><?php echo CFS()->get('sbs_thank_you_msg'); ?></h2>
				<ul>
				 <?php
				 $upload_path = content_url() . '/uploads/';
				 $loop = CFS()->get('sbs_sponsor');
				 foreach($loop as $row) : ?>
				 <?php $logo_image_ID = $row['sbs_sponsor_logo']; ?>
				 <?php $logo_image_ALT = get_post_meta($logo_image_ID, '_wp_attachment_image_alt', true); ?>
				 <?php $logo_image_URL_data = wp_get_attachment_metadata($logo_image_ID, true); ?>
				 <?php $logo_image_URL = $logo_image_URL_data["file"]; ?>
				 <li>	<img src="<?php echo $upload_path . $logo_image_URL; ?>" alt="<?php echo get_post_meta($row['sbs_sponsor_logo'], '_wp_attachment_image_alt', true)?>" /></li>
			 <?php endforeach; ?>
		 </ul>

		 <h2>The Study Buddy Program is in partnership with</h2>
		 <ul>
			 <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vsb_logo.gif" alt="Vancouver School Board"/></li>
			 <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/burnaby_school_district.gif" alt="Burnaby School District"/></li>
		 </ul>
	</div>
	</section>

	</main> <!-- #main -->
</div> <!-- #primary -->

<!-- Other ways to be involved colour blocks -->

<?php get_footer(); ?>
