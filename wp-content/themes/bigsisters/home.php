<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<form class="accordian-form" action="accordian" method="post">
				<div class="accordian-box">
					<div class="acr-box-div">
						<div class="info-panel-content">
							Our Beliefs
							<i class="fa fa-plus-circle"></i>
						</div>
						<div class="acr-box-content">
							Duis dapibus non tortor vitae congue.
							Donec ut facilisis leo. Donec tincidunt condimentum ex, eu fermentum
							felis venenatis non. Sed molestie dapibus tellus, id ultricies tellus
							tempus ac. Nam nunc est, vehicula sit amet pretium ac, accumsan non
							justo. Curabitur justo lectus, sodales at placerat vitae,
							facilisis vel leo.
						</div>
					</div>

					<div class="acr-box-div">
						<div class="info-panel-content">
							Our Beliefs
							<i class="fa fa-plus-circle"></i>
						</div>
						<div class="acr-box-content">
							Duis dapibus non tortor vitae congue.
							Donec ut facilisis leo. Donec tincidunt condimentum ex, eu fermentum
							felis venenatis non. Sed molestie dapibus tellus, id ultricies tellus
							tempus ac. Nam nunc est, vehicula sit amet pretium ac, accumsan non
							justo. Curabitur justo lectus, sodales at placerat vitae,
							facilisis vel leo.
						</div>
					</div>

					<div class="acr-box-div">
						<div class="info-panel-content">
							Our Beliefs
							<i class="fa fa-plus-circle"></i>
						</div>
						<div class="acr-box-content">
							Duis dapibus non tortor vitae congue.
							Donec ut facilisis leo. Donec tincidunt condimentum ex, eu fermentum
							felis venenatis non. Sed molestie dapibus tellus, id ultricies tellus
							tempus ac. Nam nunc est, vehicula sit amet pretium ac, accumsan non
							justo. Curabitur justo lectus, sodales at placerat vitae,
							facilisis vel leo.
						</div>
					</div>

					<div class="acr-box-div">
						<div class="info-panel-content">
							Our Beliefs
							<i class="fa fa-plus-circle"></i>
						</div>
						<div class="acr-box-content">
							Duis dapibus non tortor vitae congue.
							Donec ut facilisis leo. Donec tincidunt condimentum ex, eu fermentum
							felis venenatis non. Sed molestie dapibus tellus, id ultricies tellus
							tempus ac. Nam nunc est, vehicula sit amet pretium ac, accumsan non
							justo. Curabitur justo lectus, sodales at placerat vitae,
							facilisis vel leo.
						</div>
					</div>
				</div>
			</form>
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
