<?php
/**
* Template Name: Programs Template
**/
get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<header class="container story-page-copy">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</header>
<div class="hero-grid container">
		<section class="program-hero">
				<div class="program-hero-img">
					<img src="<?php echo CFS()->get('hero1_img')?>" />
				</div>
				<div class="program-quote container">
					<?php echo CFS()->get('hero1_quote')?>
				</div>
		</section>

		<section class="program-hero">
				<div class="program-hero-img">
					<img src="<?php echo CFS()->get('hero2_img')?>" />
				</div>
				<div class="program-quote container">
					<?php echo CFS()->get('hero2_quote')?>
				</div>
		</section>

		<section class="program-hero">
				<div class="program-hero-img">
					<img src="<?php echo CFS()->get('hero3_img')?>" />
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
						<h3>Step 1. General Information</h3>
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
						<h3>Step 2. Requirements</h3>
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
						<h3>Step 3. Apply Now!</h3>
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
						<h3>Step 4. Next Steps</h3>
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
				<h2><?php echo CFS()->get('thank_you_msg'); ?></h2>
				<ul>
				<?php
					$loop = CFS()->get('sponsor');
					foreach($loop as $row) : ?>
				 <li>	<img src="<?php echo $row['sponsor_logo']; ?>" /></li>
				 <?php endforeach; ?>
			 </ul>
	</div>
	</section>

	</main> <!-- #main -->
</div> <!-- #primary -->

<!-- Other ways to be involved colour blocks -->

<?php get_footer(); ?>
