<?php
/**
* Template Name: About Page
**/
get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="about">

			<div class="page-header container">
				<h1 class="page-header-style">Who We Are</h1>
			</div> <!-- .page-header -->

			<div class="about-video">
				<iframe src="https://www.youtube.com/embed/nNSrSozCeU4?&showinfo=0&autoplay=1" allowfullscreen ></iframe>
			</div> <!-- .about-video -->

			<section class="our-vision container">
				<div class="vision">
					<h2>Our Vision</h2>
					<?php echo CFS()->get('vision'); ?>
				</div> <!-- .vision -->
			</section> <!-- .our-vision -->

			<hr>

			<section class="our-mission-beliefs container">

				<div class="mission">
					<h2>Our Mission</h2>
					<?php echo CFS()->get('mission'); ?>
				</div> <!-- .mission -->

			</section> <!-- .our-mission -->

			<hr>

			<section class="our-beliefs container">

				<h2>Our Beliefs</h2>
				<?php echo CFS()->get('beliefs'); ?>

				<div class="accordian-box">
					<div class="acr-box-div">

						<div class="info-panel-content beliefs">
							<span>Our Beliefs</span>
							<i class="fa fa-plus-circle"></i>
						</div> <!-- .beliefs -->
						<div class="acr-box-content">
							<?php echo CFS()->get('beliefs'); ?>
						</div> <!-- .acr-box-content -->

					</div> <!-- .acr-box-div -->
				</div> <!-- .accordian-box -->

			</section> <!-- .our-beliefs -->

			<section class="recent-news">
				<div class="container">
					<h2>Recent News</h2>
					<?php
					$args = array('post_type' => 'news', 'order' => 'ASC', 'posts_per_page' => 2);
					$all_news = get_posts( $args );
					?>
					<?php if ( have_posts() ) : ?>
						<?php foreach($all_news as $post) : setup_postdata( $post ); ?>
							<div class="about-news">
								<?php the_title('<h2 class="news-title">', '</h2>'); ?>
								<?php echo CFS()->get('excerpt')?>
							</div>
							<a href="<?php the_permalink() ?>" class="button-white">Read More</a>
						<?php endforeach; wp_reset_postdata(); ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</section> <!-- .recent-news -->

			<section class="board-advisors container">
				<h2>Board of Directors</h2>

				<div class="accordian-box">
					<div class="acr-box-div">

						<div class="info-panel-content directors">
							<span>Board of Directors</span>
							<i class="fa fa-plus-circle"></i>
						</div>
						<div class="acr-box-content">

							<?php
							$args = array('post_type' => 'director', 'posts_per_page' => -1);
							$board_directors = get_posts( $args );
							?>

							<div class="director-wrapper">
								<ul>
									<?php foreach($board_directors as $post) : setup_postdata( $post ); ?>
										<li class="director-meta">
											<div class="director-img">
												<a href="<?php echo CFS()->get('picture');?>"
													data-rel="lightbox"
													title="<?php echo CFS()->get('name');?>
													<p><?php echo CFS()->get('position');?></p>
													<?php echo CFS()->get('summary');?>">
													<img src="<?php echo CFS()->get('picture'); ?>" alt="<?php echo CFS()->get('name') ?>" />
												</a>
											</div>
											<p><?php echo CFS()->get('position'); ?></p>
											<p><?php echo CFS()->get('name'); ?></p>
											<p><a href="mailto:<?php echo CFS()->get('email');?>"><?php echo CFS()->get('email'); ?></a></p>
										</li>
									<?php endforeach; wp_reset_postdata(); ?>
								</ul>
							</div>

						</div> <!-- .acr-box-content -->

					</div> <!-- .acr-box-div -->
				</div> <!-- .accordian-box -->

				<h2>Honourary Advisory Board</h2>

				<div class="accordian-box">
					<div class="acr-box-div">

						<div class="info-panel-content advisors">
							<span>Advisors</span>
							<i class="fa fa-plus-circle"></i>
						</div> <!-- .board-advisors -->
						<div class="acr-box-content advisor-list">
							<?php echo CFS()->get('advisors'); ?>
						</div> <!-- .acr-box-content -->

					</div> <!-- .acr-box-div -->
				</div> <!-- .accordian-box -->

			</section> <!-- .board-advisors -->

			<section class="supporters container">
				<h2>Our Supporters</h2>
				<?php echo CFS()->get('supporters_paragraph'); ?>

				<div class="accordian-box">
					<div class="acr-box-div">

						<div class="info-panel-content loyalty-circles">
							<span>Loyalty and Giving Circles</span>
							<i class="fa fa-plus-circle"></i>
						</div>
						<div class="acr-box-content"> <!-- hidden content goes here -->

							<?php echo CFS()->get('loyalty_paragraph'); ?>

							<div class="info-panel-content donor-panel">
								<span>Visionary Match Makers ($50,000+)</span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content">
								<?php echo CFS()->get('visionary_match_makers'); ?>
							</div>

							<div class="info-panel-content donor-panel">
								<span>Diamond Match Makers ($10,000 - $49,000)</span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content">
								<?php echo CFS()->get('diamond_match_makers'); ?>
							</div>

							<div class="info-panel-content donor-panel">
								<span>Platinum Match Makers ($7,500 - $9,999)</span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content">
								<?php echo CFS()->get('platinum_match_makers'); ?>
							</div>

							<div class="info-panel-content donor-panel">
								<span>Golden Match Makers ($5,000 - $7,499)</span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content">
								<?php echo CFS()->get('golden_match_makers'); ?>
							</div>

							<div class="info-panel-content donor-panel">
								<span>Match Makers ($2,000 - $4,999)</span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content">
								<?php echo CFS()->get('match_makers'); ?>
							</div>

							<div class="info-panel-content donor-panel">
								<span>Champions ($1,000 - $1,999)</span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content">
								<?php echo CFS()->get('champions'); ?>
							</div>

							<div class="info-panel-content donor-panel">
								<span>Believers ($500 - $999)</span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content">
								<?php echo CFS()->get('believers'); ?>
							</div>

							<div class="info-panel-content donor-panel">
								<span>Friends ($100 - $499)</span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content">
								<?php echo CFS()->get('friends'); ?>
							</div>

							<div class="info-panel-content donor-panel">
								<span>Supporters ($1 -$99)</span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content">
								<?php echo CFS()->get('supporters'); ?>
							</div>

						</div> <!-- .acr-box-content -->

						<div class="info-panel-content applause">
							<span>Applause</span>
							<i class="fa fa-plus-circle"></i>
						</div>
						<div class="acr-box-content">
							<?php
							$loop = CFS()->get('applause');
							foreach($loop as $row) : ?>
							<div class="info-panel-content month-panel">
								<span><?php echo $row['month']; ?></span>
								<i class="fa fa-plus-circle"></i>
							</div>
							<div class="acr-box-content donor-list">
								<?php echo $row['applause_donors']; ?>
							</div>
						<?php endforeach; ?>
					</div> <!-- .acr-box-content -->

			</div> <!-- .acr-box-div -->
		</div> <!-- .accordian-box -->

	</section> <!-- .supporters -->

</div> <!-- .about -->

</main> <!-- #main -->
</div> <!-- #primary -->

<?php get_footer(); ?>
