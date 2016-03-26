<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="hero-slider">
                <ul>
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
                    <input type="email" placeholder="Email address" />
                    <input type="text" placeholder="First name" />
                    <input type="text" placeholder="Last name" />
                    <button class="button-white">Sign Up</button>
                </form>
            </section>
			<section class="hero-stories">
                <ul>
                    <li class="individual-hero-stories">
						<div class"hero-quote-wrap">
	                        <p class="stories-quote">
	                            "Offering my time and <span class="quote-orange">support</span> to my little <span class="quote-orange">sister</span> is one of the most <span>fulfilling</span> things I have done in my life."
	                        </p>
							<p class="quoter">- Big Sister Carolyn</p>
						</div>
                    </li>
					<li class="individual-hero-stories">
						<div class"hero-quote-wrap">
	                        <p class="stories-quote">
	                            <span class="quote-orange">92%</span> of  Little Sisters feel <span class="quote-orange">confident</span>
	                        </p>
						</div>
                    </li>
					<li class="individual-hero-stories">
						<div class"hero-quote-wrap">
	                        <p class="stories-quote">
	                            "I have seen the girls <span class="quote-green">develop new friendships</span> with each other and display greater <span class="quote-green">confidence</span>"
	                        </p>
							<p class="quoter">- Shanny, Go Girls Mentor</p>
						</div>
                    </li>
                </ul>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
