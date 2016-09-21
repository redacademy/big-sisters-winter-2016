<?php
/**
 * Template Name: Host Fundraising Event Page
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php $fields = CFS()->get( 'hero_content' );
			foreach ( $fields as $field ) : ?>
			<section class="page-hero">
				<?php if ( $field['hero_image_link'] ) : ?>
				<a href="<?php echo $field['hero_image_link']; ?>"><img src="<?php echo $field['hero_image']; ?>" alt="Host a fundraising event hero image" /></a>
			<?php else: ?>
				<img src="<?php echo $field['hero_image']; ?>" alt="Host a fundraising event hero image" />
			<?php endif; ?>
				<div class="hero-quote">
					<?php echo $field['hero_quote']; ?>
				</div>
			</section>
			<?php endforeach; ?>

            <section class="host-fundraiser-inforation-panels">
                <h1 class="host-fundraiser-title">
                    Host a Fundraising Event
                </h1>
                <div class="accordian-box container">
                    <div class="acr-box-div">
                        <div class="info-panel-content">
                            <p><span class="fe-step-color">Step 1.</span> <?php echo CFS()->get('step_1_title'); ?></p>
                            <i class="fa fa-plus-circle"></i>
                        </div>
                        <div class="acr-box-content container">
                            <?php echo CFS()->get('step_1'); ?>
                        </div>
                    </div>
				</div>
				<div class="accordian-box container">
                    <div class="acr-box-div">
                        <div class="info-panel-content">
                            <p><span class="fe-step-color">Step 2.</span> <?php echo CFS()->get('step_2_title'); ?></p>
                            <i class="fa fa-plus-circle"></i>
                        </div>
                        <div class="acr-box-content container">
                            <?php echo CFS()->get('step_2'); ?>
                        </div>
                    </div>
				</div>
				<div class="accordian-box container">
                    <div class="acr-box-div">
                        <div class="info-panel-content">
                            <p><span class="fe-step-color">Step 3.</span> <?php echo CFS()->get('step_3_title'); ?></p>
                            <i class="fa fa-plus-circle"></i>
                        </div>
                        <div class="acr-box-content container">
                            <?php echo CFS()->get('step_3'); ?>
                        </div>
                    </div>
				</div>
				<div class="accordian-box container">
                    <div class="acr-box-div">
                        <div class="info-panel-content">
                            <p><span class="fe-step-color">Step 4.</span> <?php echo CFS()->get('step_4_title'); ?></p>
                            <i class="fa fa-plus-circle"></i>
                        </div>
                        <div class="acr-box-content container">
							<?php echo CFS()->get('step_4'); ?>
                        </div>
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
