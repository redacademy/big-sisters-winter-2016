<?php
/**
 * The main template file.
 *
 * @package Big_Sisters_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="recent-news">

				<?php
					$args = array('post_type' => 'post', 'posts_per_page' => 4);
					$latest_posts = get_posts( $args );
				?>

				<div class="container">
					<h2>In The News</h2>

					<ul>
						<?php foreach($latest_posts as $post) : setup_postdata( $post ); ?>
							<li class="post-wrapper">

								<div class="post-meta">
									<h3 class="post-title"><?php the_title(); ?></h3>
									<p><?php big_sisters_posted_on(); ?></p>
									<?php the_content(); ?>

									<a href="<?php the_permalink(); ?>">
										<button class="read-more button-white" type="button" name="button">Read More</button>
									</a>

								</div>

							</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>

					<div class="accordian-box">
						<div class="acr-box-div">

							<div class="info-panel-content older-stories">
								<span>Older stories</span>
								<i class="fa fa-plus-circle"></i>
							</div> <!-- .older-stories -->
							<div class="acr-box-content">
								HIDDEN CONTENT
							</div> <!-- .acr-box-content -->

						</div> <!-- .acr-box-div -->
					</div> <!-- .accordian-box -->


				</div> <!-- .container -->

			</section> <!-- .recent-news -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
