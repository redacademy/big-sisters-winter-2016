<?php
/**
* Template Name: Refer a Little
**/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<header class="refer-header container">
				<h1 class="refer-title page-header-style"><?php echo esc_html(CFS()->get( 'title_refer' ) ); ?></h1>
			</header>

			<section class="tri-img-grid container">
				<div class="tri-img">
					<img src="<?php echo CFS()->get( 'quote_image_one' ); ?>" alt="<?php echo esc_html(CFS()->get( 'quote_image_one_description' ) ); ?>">
					<div class="tri-img-quote container">
						<?php echo CFS()->get( 'quote_text_one' ); ?>
					</div>
				</div>

				<div class="tri-img">
					<img src="<?php echo CFS()->get( 'quote_image_two' ); ?>" alt="<?php echo esc_html(CFS()->get( 'quote_image_two_description' ) ); ?>">
					<div class="tri-img-quote container">
						<?php echo CFS()->get( 'quote_text_two' ); ?>
					</div>
				</div>

				<div class="tri-img">
					<img src="<?php echo CFS()->get( 'quote_image_three' ); ?>" alt="<?php echo esc_html(CFS()->get( 'quote_image_three_description' ) ); ?>">
					<div class="tri-img-quote container">
						<?php echo CFS()->get( 'quote_text_three' ); ?>
					</div>
				</div>
			</section>

			<div class="enroll-content">
				<?php
				$loop1 = CFS()->get('enrollment_steps');
				foreach($loop1 as $row1) : ?>
				<h2 class="enroll-title"><?php echo $row1['program_title']; ?></h2>
				<?php
				$loop2 = $row1['steps'];
				$step_no = 1;
				foreach($loop2 as $row2) : ?>
				<div class="accordian-box container">
					<div class="acr-box-div">
						<div class="info-panel-content">
							<p><span class="step-color">Step <?php echo $step_no; $step_no += 1 ?>:</span> <?php echo $row2['step_title']; ?></p>
							<i class="fa fa-plus-circle"></i>
						</div>
						<div class="acr-box-content container">
							<?php echo $row2['step_instructions'] ?>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				<?php endforeach; ?>

<?php /*
				<div class="accordian-box">
					<div class="acr-box-div container">
						<div class="info-panel-content">
							<p><span class="step-color">Step 1.</span> General Information</p>
							<i class="fa fa-plus-circle"></i>
						</div>
						<div class="acr-box-content container">
							<p>The </p>
							</div>
						</div>
					</div>
					<div class="accordian-box">
						<div class="acr-box-div container">
							<div class="info-panel-content">
								<p><span class="step-color">Step 2.</span> Requirements</p>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content container">
								<p>In order to be a Big Sisters Mentor, the following requirements must be met:</p>
								<ul>
									<li>Age 19 or older</li>
									<li>Mature, stable, reliable and respectful of others</li>
									<li>Canadian resident for the past year (or able to provide an International Criminal Records Check)</li>
									<li>Able to commit to spending at least 2 hours a week with your Little Sister <b>(Yes! Occasional vacations and work travel are fine!)</b></li>
									<li>Interested in developing a positive friendship with a girl (aged 7-17)</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordian-box">
						<div class="acr-box-div container">
							<div class="info-panel-content">
								<p><span class="step-color">Step 3.</span> Apply Now!</p>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content container">
								<p>Thank you for your interest in becoming a Big Sisters Mentor.
									Before continuing, please read through the following slideshow.</p>
									<p><b>Please note: You will be required to obtain a background check.</b>
										The instructions for obtaining one can be found here.</p>
										<p>The application form is quite detailed. We do this to ensure that we can
											gather as much information as possible in order to make the best match
											between a Little Sister and a Big Sister</p>
											<p>We recommend you give yourself about an hour to complete the
												application, and as the form cannot be saved, completing it from a desktop
												or a laptop.</p>
												<button class="button-deepblue steps-button">Apply Now</button>
											</div>
										</div>
									</div>
									<div class="accordian-box">
										<div class="acr-box-div container">
											<div class="info-panel-content">
												<p><span class="step-color">Step 4. </span>Next Steps</p>
												<i class="fa fa-plus-circle"></i>
											</div>
											<div class="acr-box-content container">
												<p>The Big Sisters Mentoring program matches girls, ages 7–17,
													with a roll model and friend to talk to and share the experience
													of growing up. Through once a week outings, a relationship is
													developed between the mentor and Little Sister, that is built
													on trust and common interests and is supported by our
													experienced case workers. The result is a life changing
													experience for both the volunteer and the mentor.</p>
													<p>Remember- you are a mentor! You will always have a case
														worker assigned to you to help you in case any issues come up.</p>
														<p>Big Sisters strives to do the following:</p>
														<ul>
															<li>Provide a role model and friend for girls and young women</li>
															<li>Promote the importance of staying in school and healthy relationships with family and peers</li>
															<li>Instill trust and self-confidence in order to make healthy decisions</li>
															<li>Encourage leadership skills and independent thinking</li>
															<li>Above all, <b>make a difference</b> while <b>having fun</b></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<h2 class="study-buddy-title"><?php echo esc_html(CFS()->get( 'title_study_buddy' ) ); ?></h2>

										<div class="accordian-box">
											<div class="acr-box-div container">
												<div class="info-panel-content">
													<p><span class="step-color">Step 1. </span>General Information</p>
													<i class="fa fa-plus-circle"></i>
												</div>
												<div class="acr-box-content container">
													<p>The Big Sisters Mentoring program matches girls, ages 7–17, with 
														a role model and a friend to talk to and share the experience
														of growing up. Through once a week outings, a relationship is
														developed between the mentor and Little Sister, that is built
														on trust and common interests and is supported by our
														experienced case workers. The result is a life changing
														experience for both the volunteer and the mentor.</p>

														<p>Big Sisters strives to do the following:</p>
														<ul>
															<li>Provide a role model and friend for girls and young women (ages 7-17)</li>
															<li>Promote the importance of staying in school and healthy relationships with family and peers</li>
															<li>Instill trust and self-confidence in order to make healthy decisions</li>
															<li>Encourage leadership skills and independent thinking</li>
															<li>Above all, <b>make a difference</b> while <b>having fun</b></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="accordian-box">
												<div class="acr-box-div container">
													<div class="info-panel-content">
														<p><span class="step-color">Step 2.</span> Requirements</p>
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="acr-box-content container">
														<p>In order to be a Big Sisters Mentor, the following requirements must be met:</p>
														<ul>
															<li>Age 19 or older</li>
															<li>Mature, stable, reliable and respectful of others</li>
															<li>Canadian resident for the past year (or able to provide an International Criminal Records Check)</li>
															<li>Able to commit to spending at least 2 hours a week with your Little Sister <b>(Yes! Occasional vacations and work travel are fine!)</b></li>
															<li>Interested in developing a positive friendship with a girl (aged 7-17)</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="accordian-box">
												<div class="acr-box-div container">
													<div class="info-panel-content">
														<p><span class="step-color">Step 3.</span> Apply Now!</p>
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="acr-box-content container">
														<p>Thank you for your interest in becoming a Big Sisters Mentor.
															Before continuing, please read through the following slideshow.</p>
															<p><b>Please note: You will be required to obtain a background check.</b>
																The instructions for obtaining one can be found here.</p>
																<p>The application form is quite detailed. We do this to ensure that we can
																	gather as much information as possible in order to make the best match
																	between a Little Sister and a Big Sister</p>
																	<p>We recommend you give yourself about an hour to complete the
																		application, and as the form cannot be saved, completing it from a desktop
																		or a laptop.</p>
																		<button class="button-deepblue steps-button">Apply Now</button>
																	</div>
																</div>
															</div>
															<div class="accordian-box">
																<div class="acr-box-div container">
																	<div class="info-panel-content">
																		<p><span class="step-color">Step 4.</span> Next Steps</p>
																		<i class="fa fa-plus-circle"></i>
																	</div>
																	<div class="acr-box-content container">
																		<p>The Big Sisters Mentoring program matches girls, ages 7–17,
																			with a roll model and friend to talk to and share the experience
																			of growing up. Through once a week outings, a relationship is
																			developed between the mentor and Little Sister, that is built
																			on trust and common interests and is supported by our
																			experienced case workers. The result is a life changing
																			experience for both the volunteer and the mentor.</p>
																			<p>Remember- you are a mentor! You will always have a case
																				worker assigned to you to help you in case any issues come up.</p>
																				<p>Big Sisters strives to do the following:</p>
																				<ul>
																					<li>Provide a role model and friend for girls and young women</li>
																					<li>Promote the importance of staying in school and healthy relationships with family and peers</li>
																					<li>Instill trust and self-confidence in order to make healthy decisions</li>
																					<li>Encourage leadership skills and independent thinking</li>
																					<li>Above all, <b>make a difference</b> while <b>having fun</b></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																	*/ ?>


																	<?php
																	// If comments are open or we have at least one comment, load up the comment template.
																	if ( comments_open() || get_comments_number() ) :
																		comments_template();
																	endif;
																	?>

																<?php endwhile; // End of the loop. ?>
															</main><!-- #main -->
														</div><!-- #primary -->

														<?php get_footer(); ?>
