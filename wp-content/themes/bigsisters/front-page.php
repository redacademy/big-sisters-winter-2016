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
						<img src="<?php echo $field['hero_image']; ?>" alt="Big Sisters Feature Story" />
						<div class="hero-quote fp-quote">
						    <?php echo $field['hero_quote']; ?>
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
                <form>
					<div class="name-container">
						<input type="text" placeholder="First name" />
	                    <input type="text" placeholder="Last name" />
					</div>
					<input type="email" placeholder="Email address" />
                    <a class="button-white" href="#">Sign Up</a>
                </form>
            </section>
			<section class="tri-grid container">
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





			<!-- <section class="hero-stories">
				<a href="/story/">
	                <ul>
	                    <li class="individual-hero-stories">
							<div class="hero-quote-wrap">
		                        <p class="stories-quote">
		                            "Offering my time and <span class="quote-orange">support to my little sister</span>
									is one of the most <span class="quote-green">fulfilling</span> things I have done in my life."
		                        </p>
								<p class="quoter">- Big Sister Carolyn</p>
							</div>
	                    </li>
						<li class="individual-hero-stories">
							<div class="hero-quote-wrap">
		                        <p class="stories-quote">
		                            <span class="quote-dusk">92%</span> of  Little Sisters
									<span class="quote-blue">feel confident</span>
		                        </p>
							</div>
	                    </li>
						<li class="individual-hero-stories">
							<div class="hero-quote-wrap">
		                        <p class="stories-quote">
		                            "I have seen the girls <span class="quote-green">develop new friendships</span>
									with each other and display greater <span class="quote-orange">confidence.</span>"
		                        </p>
								<p class="quoter">- Shanny, Go Girls Mentor</p>
							</div>
	                    </li>
	                </ul>
				</a>
            </section> -->
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
				<h1>Special Thanks To Our Programming Sponsors</h1>
				<ul>
					<li class="sponsor-logo-wrap">
						<a href="http://vancouver.ca/" target="_blank">
							<img src="<?php echo $directory; ?>/assets/images/sponsors/cityofvancouver-logo.png"
								 alt="City of Vancouver Logo" />
						</a>
					</li>
					<li class="sponsor-logo-wrap">
						<a href="http://www.uwlm.ca/" target="_blank">
							<img src="<?php echo $directory; ?>/assets/images/sponsors/unitedway-logo.png"
							     alt="United Way Vancouver Logo" />
						</a>
					</li>
					<li class="sponsor-logo-wrap">
						<a href="http://www2.gov.bc.ca/" target="_blank">
							<img src="<?php echo $directory; ?>/assets/images/sponsors/britishcolumbia-logo.png"
							     alt="British Columbia Logo" />
						</a>
					</li>
				</ul>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
