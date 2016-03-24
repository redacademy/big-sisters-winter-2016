<?php
/**
* Template Name: About Page
**/
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="about">

				<div class="page-header container">
					<h1>Who We Are</h1>
				</div> <!-- .page-header -->

				<div class="about-video">
					<iframe src="https://www.youtube.com/embed/nNSrSozCeU4?&showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div> <!-- .about-video -->

				<section class="our-vision container">
					<div class="vision">
						<h2>Our Vision</h2>
						<?php echo CFS()->get('vision'); ?>
					</div> <!-- .vision -->
				</section> <!-- .our-vision -->

				<hr>

				<section class="mission-beliefs container">
					<div class="mission">
						<h2>Our Mission</h2>
						<?php echo CFS()->get('mission'); ?>
					</div> <!-- .mission -->

					<div class="beliefs">
						<span>Our Beliefs</span>
						<i class="fa fa-plus-circle"></i>
					</div> <!-- .beliefs -->

				</section> <!-- .mission-beliefs -->

				<section class="recent-news container">
					<h2>Recent News</h2>

					<div class="more-media">
						<span>More Media</span>
						<i class="fa fa-plus-circle"></i>
					</div>
				</section> <!-- .recent-news -->

				<section class="board-advisors container">
					<h2>Board of Directors</h2>
					<div class="board-directors">
						<span>Board of Directors</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<h2>Honourary Advisory Board</h2>
					<div class="board-directors">
						<span>Advisors</span>
						<i class="fa fa-plus-circle"></i>
					</div>
				</section> <!-- .board-advisors -->

				<section class="supporters container">
					<h2>Our Supporters</h2>
					<?php echo CFS()->get('supporters'); ?>

					<div class="loyalty-circles">
						<span>Loyalty and Giving Circles</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="donor-panel">
						<span>Visionary Match Makers ($50,000+)</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="donor-panel">
						<span>Diamond Match Makers ($10,000 - $49,000)</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="donor-panel">
						<span>Platinum Match Makers ($7,500 - $9,999)</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="donor-panel">
						<span>Golden Match Makers ($5,000 - $7,499)</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="donor-panel">
						<span>Match Makers ($2,000 - $4,999)</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="donor-panel">
						<span>Champions ($1,000 - $1,999)</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="donor-panel">
						<span>Believers ($500 - $999)</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="donor-panel">
						<span>Friends ($100 - $499)</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="donor-panel">
						<span>Supporters ($1 -$99)</span>
						<i class="fa fa-plus-circle"></i>
					</div>

				</section> <!-- .supporters -->

				<section class="container">

					<div class="applause">
						<span>Applause</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="month-panel">
						<span>January 2016</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="month-panel">
						<span>December 2015</span>
						<i class="fa fa-plus-circle"></i>
					</div>

					<div class="month-panel">
						<span>November 2015</span>
						<i class="fa fa-plus-circle"></i>
					</div>


				</section>

			</div> <!-- .about -->

    </main> <!-- #main -->
  </div> <!-- #primary -->

<?php get_footer(); ?>
