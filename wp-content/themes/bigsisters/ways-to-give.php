<?php
/**
 * Template Name: Ways to Give
 **/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="ways2give-hero">
				<p class="ways2give-quote">When you contribute to Big Sisters you're
				helping a child reach their full potential.</p>
				<button class="button-brightblue">LEARN MORE</button>
			</section>

			<section class="container">
			  <h1 class="page-header-style">Our Donors make Big Sisters possible. Every little bit helps.</h1>
				  <p>
				    We undestand that every one is different. Which is why Big Sisters
				    offers so many different ways to contribute to our cause. We
				    sincerely thank you for considering donating to our organization.
				  </p>
			</section>

			<section class="give-flex">
				<ul>
					<?php
						$loop = CFS()->get('ways_to_give');
						foreach($loop as $row) : ?>
					 <li><div class="container">
						 <div class="donate-icon"><img src="<?php echo $row['donate_icon']; ?>" alt="<?php echo esc_html(CFS()->get( 'donate_icon_description' ) ); ?>"/></div>
						 <div class="donate-option-description">
					 	<h2><?php echo $row['donate_title']; ?></h2>
					 	<p><?php echo $row['donation_description']; ?></p>
				 </div>
			 </div>
					 <?php endforeach; ?>
				 </li>
				 </ul>
		  </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
