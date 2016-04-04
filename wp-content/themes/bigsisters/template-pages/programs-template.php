<?php
/**
* Template Name: Programs Template
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
					<img src="<?php echo CFS()->get('hero1_img'); ?>" alt="<?php echo wp_strip_all_tags( $img_ALT ); ?>"/>
				</div>
				<div class="program-quote container">
					<?php echo CFS()->get('hero1_quote')?>
				</div>
		</section>

		<section class="program-hero">
				<div class="program-hero-img">
					<?php $img_ALT = CFS()->get('hero2_quote'); ?>
					<img src="<?php echo CFS()->get('hero2_img')?>" alt="<?php echo wp_strip_all_tags( $img_ALT ); ?>"/>
				</div>
				<div class="program-quote container">
					<?php echo CFS()->get('hero2_quote')?>
				</div>
		</section>

		<section class="program-hero">
				<div class="program-hero-img">
					<?php $img_ALT = CFS()->get('hero3_quote'); ?>
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


		 <?php include_once(trailingslashit( get_template_directory() ).'inc/sponsor-grid.php'); ?>

	</section>

	</main> <!-- #main -->
</div> <!-- #primary -->

<!-- Other ways to be involved colour blocks -->

<?php get_footer(); ?>
