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
            <section>
                <a href="#">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/two-girls-icon.svg" alt="Big Sisters Becoming a Mentor">
                        <p>Become a Mentor</p>
                    </div>
                </a>
                <a href="#">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/two-girls-icon.svg" alt="Big Sisters Refer a Little">
                        <p>Refer A Little</p>
                    </div>
                </a>
                <a href="#">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calender-icon.svg" alt="Big Sisters Events">
                        <p>Events</p>
                    </div>
                </a>
            </section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
