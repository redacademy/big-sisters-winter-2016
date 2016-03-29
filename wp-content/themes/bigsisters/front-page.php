<?php
/**
 * Template Name: Front Page
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="hero-slider">
                <ul class="bxslider">
                    <li class="bigsister-hero-fp">
                        <p class="hero-quote">
                            "Becoming a Big Sister gave me purpose to my life."<br/>- Anita
                        </p>
                        <button class="button-brightblue">Learn more</button>
                    </li>
                    <li class="bigsister-hero-fp">
                        <p class="hero-quote">
                            "Becoming a Big Sister gave me purpose to my life."<br/>- Anita
                        </p>
                        <button class="button-brightblue">Learn more</button>
                    </li>
                    <li class="bigsister-hero-fp">
                        <p class="hero-quote">
                            "Becoming a Big Sister gave me purpose to my life."<br/>- Anita
                        </p>
                        <button class="button-brightblue">Learn more</button>
                    </li>
                </ul>
            </section>
            <section class="colored-menu-sections">
                <a href="#">
                    <div class="colored-menu">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/hands-up-icon.png" alt="Big Sisters Becoming a Mentor">
                        </div>
                        <p>Becoming a Mentor</p>
                    </div>
                </a>
                <a href="#">
                    <div class="colored-menu">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/two-girls-icon.png" alt="Big Sisters Refer a Little">
                        </div>
                        <p>Refer A Little</p>
                    </div>
                </a>
                <a href="#">
                    <div class="colored-menu">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/events-calendar-icon.png" alt="Big Sisters Events">
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
                    <button class="button-white">Sign Up</button>
                </form>
            </section>
			<section class="hero-stories">
                <ul>
                    <li class="individual-hero-stories">
						<div class"hero-quote-wrap">
	                        <p class="stories-quote">
	                            "Offering my time and <span class="quote-orange">support to my little sister</span> is one of the most <span class="quote-green">fulfilling</span> things I have done in my life."
	                        </p>
							<p class="quoter">- Big Sister Carolyn</p>
						</div>
                    </li>
					<li class="individual-hero-stories">
						<div class"hero-quote-wrap">
	                        <p class="stories-quote">
	                            <span class="quote-dusk">92%</span> of  Little Sisters <span class="quote-blue">feel confident</span>
	                        </p>
						</div>
                    </li>
					<li class="individual-hero-stories">
						<div class"hero-quote-wrap">
	                        <p class="stories-quote">
	                            "I have seen the girls <span class="quote-green">develop new friendships</span> with each other and display greater <span class="quote-orange">confidence</span>"
	                        </p>
							<p class="quoter">- Shanny, Go Girls Mentor</p>
						</div>
                    </li>
                </ul>
            </section>
			<section class="fp-recent-donors">
				<h1>Thank you to our recent donors</h1>
				<ul class="bxslider">
					<li class="individual-donor">
						<?php $fields = CFS()->get( 'donation_information' );
						foreach ( $fields as $field ) : ?>
						    <h3 class="donor-name"><?php echo $field['donor_name']; ?></h3>
							<p class="donation-amount"><?php echo $field['donation_amount']; ?></p>
							<p class="program-type"><?php echo $field['program_name']; ?></p>
							<p class="sponsor-level"><?php echo $field['additional_information']; ?></p>
						<?php endforeach; ?>
					</li>
				</ul>
			</section>
			<section class="program-sponsors">
				<h1>Special Thanks To Our Programming Sponsors</h1>
				<ul>
					<li class="sponsor-logo-wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sponsors/cityofvancouver-logo.png" alt="City of Vancouver Logo">
					</li>
					<li class="sponsor-logo-wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sponsors/unitedway-logo.png" alt="United Way Vancouver Logo">
					</li>
					<li class="sponsor-logo-wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sponsors/britishcolumbia-logo.png" alt="British Columbia Logo">
					</li>
				</ul>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
