<?php
/**
* Template Name: Get Involved
**/
get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<header class="container story-page-copy">
			<h1 class="involved-header">Learn About Becoming a Mentor!</h1>
		</header>

		<section class="container involved-copy">
			<?php include_once('inc/initatives.php'); ?>
		</section>
		<!-- other volunteer opportunities -->
		<section class="container involved-copy">
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<h3>Other Volunteer Opportunities</h3>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content">
						<h4>Activities Committee Member<br /> (6 hours/month)</h4>
						<p>Help plan group activities for Big &amp; Little Sister matches such as sporting activities, First Nations cultural events, seasonal parties, craft days, slumber parties, and more. <a href="" target="_blank">Download volunteer application.</a></p>
						<hr>
						<h4>Event and Fundraising Admin Volunteer Opportunity</h4>
						<p>The fundraising team is looking for a superstar volunteer to help with upcoming events and various administrative tasks. Download the <a href="" target="_blank">full volunteer posting here.</a> To apply send your resume and cover letter to Meagan Smith, Events Manager at <a href="mailto:msmith@bigsisters.bc.ca">msmith@bigsisters.bc.ca</a> by March 14th, 2016</p>
					<hr>
					<p>Interested in being a Big Brother? Contact Big Brothers of Greater Vancouver at 604-876-2447 or visit <a href="http://www.bigbrothersvancouver.com" target="_blank">http://www.bigbrothersvancouver.com</a></p>
					</div>
				</div>
			</div>
		</section>
		<!-- Career opportunities -->
		<section class="container involved-copy">
			<div class="accordian-box">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<h3>Career Opportunities</h3>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content">
							<?php
							$args = array('post_type' => 'career', 'posts_per_page' => -1);
							$all_careers = get_posts( $args );
							?>
							<?php if ( have_posts() ) : ?>
							<?php foreach($all_careers as $post) : setup_postdata( $post ); ?>
								<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
							<?php endforeach; wp_reset_postdata(); ?>
						<?php else : ?>
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

		<!-- Refer a Little Sisiter -->
		<section>
			<h2 class="involved-header">Refer A Little Sister</h2>
			<div class="little-sister-hero">
				<div class="little-sister-quote">
					<p>"Big Sisters is the best thing that has happenend to our family!"</p>
					<a href="<?php get_template_directory_uri(); ?>/story"><button class="button-brightblue">Learn More</button></a>
				</div>
			</div>
		</section>

		<!-- Other ways to get involved -->
	<?php include_once('inc/otherways.php'); ?>

		<!-- Sponsor thank you -->
		<section class="container">
			<div class="sponsor-grid">
				<h2><?php echo CFS()->get('thank_you_msg'); ?></h2>
				<ul>
				<?php
					$loop = CFS()->get('sponsor');
				  foreach($loop as $row) : ?>
				 <li>	<img src="<?php echo $row['sponsor_logo']; ?>" /></li>
				 <?php endforeach; ?>
			 </ul>
	</div>
	</section>
	</main> <!-- #main -->
</div> <!-- #primary -->

<?php get_footer(); ?>
