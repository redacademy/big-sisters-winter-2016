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
                    <div>
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/two-girls-icon.svg" alt="Big Sisters Becoming a Mentor">
                        </div>
                        <p>Becoming a Mentor</p>
                    </div>
                </a>
                <a href="#">
                    <div>
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/two-girls-icon.svg" alt="Big Sisters Refer a Little">
                        </div>
                        <p>Refer A Little</p>
                    </div>
                </a>
                <a href="#">
                    <div>
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calender-icon.svg" alt="Big Sisters Events">
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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
