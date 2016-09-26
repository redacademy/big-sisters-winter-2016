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
		<section class="tri-img-grid container">
				<div class="tri-img">
							<img src="<?php echo CFS()->get('hero1_img'); ?>" alt="<?php echo wp_strip_all_tags(CFS()->get( 'hero1_quote' ) ); ?>"/>
						<div class="tri-img-quote container">
							<?php echo CFS()->get( 'hero1_quote' ); ?>
						</div>
				</div>

				<div class="tri-img">
							<img src="<?php echo CFS()->get('hero2_img')?>" alt="<?php echo wp_strip_all_tags(CFS()->get( 'hero2_quote' ) ); ?>"/>
						<div class="tri-img-quote container">
							<?php echo CFS()->get( 'hero2_quote' ); ?>
						</div>
				</div>

				<div class="tri-img">
							<img src="<?php echo CFS()->get('hero3_img')?>" alt="<?php echo wp_strip_all_tags(CFS()->get( 'hero3_quote' ) ); ?>"/>
						<div class="tri-img-quote container">
							<?php echo CFS()->get( 'hero3_quote' ); ?>
						</div>
				</div>
		</section>
		<!-- Step 1 -->
		<section class="container">
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<p><span class="step-color">Step 1.</span> <?php echo CFS()->get('step_1_title'); ?></p>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content container">
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
						<p><span class="step-color">Step 2.</span> <?php echo CFS()->get('step_2_title'); ?></p>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content container">
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
						<p><span class="step-color">Step 3.</span> <?php echo CFS()->get('step_3_title'); ?></p>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content container">
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
						<p><span class="step-color">Step 4.</span> <?php echo CFS()->get('step_4_title'); ?></p>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content container">
						<?php echo CFS()->get('step_4')?>
					</div>
				</div>
			</div>
		</section>
<!--
		<section class="container">
			<div class="sponsor-grid">
				<h2>Founding Partner</h2>
			<ul>
				<li>
					<a href="http://www.raymondjames.ca" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/raymond_james.gif" alt="Founding Partner Raymond James"/>
					</a>
				</li>
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
				 <?php echo $logo_image_URL_data["link"]; ?>
				 <li>
					 <a href="<?php echo $row['sbs_website'] ?>" target="_blank">
					 <img src="<?php echo $upload_path . $logo_image_URL; ?>" alt="<?php echo get_post_meta($row['sbs_sponsor_logo'], '_wp_attachment_image_alt', true)?>" />
				 </a>
			 </li>
			 <?php endforeach; ?>
		 </ul>

		 <h2>The Study Buddy Program is in partnership with</h2>
		 <ul>
			 <li>
				 <a href="http://www.vsb.bc.ca/" target="_blank">
				 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vsb_logo.gif" alt="Vancouver School Board"/>
			 </a>
			 </li>
			 <li>
				 <a href="http://www.sd41.bc.ca/" target="_blank">
				 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/burnaby_school_district.gif" alt="Burnaby School District"/>
			 </a>
		 </li>
		 </ul>
	</div>
	</section>
-->
			<?php
			$upload_path = content_url() . '/uploads/';
			$loop = CFS()->get('new_sponsor_section');
			foreach($loop as $row) : ?>
			<section class="container">
				<div class="sponsor-grid">

			<h2><?php echo $row['section_title']; ?></h2>
			<ul>

			<?php foreach($row['new_logos'] as $logos) : ?>
				<?php $logo_image_ID = $logos['company_logo']; ?>
				<?php $logo_image_ALT = get_post_meta($logo_image_ID, '_wp_attachment_image_alt', true); ?>
				<?php $logo_image_URL_data = wp_get_attachment_metadata($logo_image_ID, true); ?>
				<?php $logo_image_URL = $logo_image_URL_data['file']; ?>
				<li>
					<a href="<?php echo $logos['company_website']; ?>" target="_blank" >
						<img src="<?php echo $upload_path . $logo_image_URL; ?>" alt="<?php echo get_post_meta($logos['sponsor_logo'], '_wp_attachment_image_alt', true)?>" />
					</a>
				</li>
			<?php endforeach; ?>
		</div>
			</section>

		<?php endforeach; ?>
	</ul>
	</main> <!-- #main -->
</div> <!-- #primary -->

<!-- Other ways to be involved colour blocks -->

<?php get_footer(); ?>
