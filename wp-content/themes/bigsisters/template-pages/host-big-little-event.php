<?php
/**
 * Template Name: Host Big Little Event Page
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php $fields = CFS()->get( 'hero_content' );
			foreach ( $fields as $field ) : ?>
			<section class="page-hero">
				<img src="<?php echo $field['hero_image']; ?>" alt="Host a big little event hero image" />
				<div class="hero-quote">
					<?php echo $field['hero_quote']; ?>
				</div>
			</section>
			<?php endforeach; ?>

            <section class="host-activity-inforation-panels">
                <h1 class="host-bl-activity-title">
                    Host a Big Little Activity
                </h1>
                <div class="accordian-box container">
                    <div class="acr-box-div">
                        <div class="info-panel-content">
                            <p><span class="fe-step-color">Step 1.</span> General information</p>
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
                            <p><span class="fe-step-color">Step 2.</span> Complete application</p>
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
                            <p><span class="fe-step-color">Step 3.</span> Receive approval and start planning</p>
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
                            <p><span class="fe-step-color">Step 4.</span> Hold your event and have fun!</p>
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
