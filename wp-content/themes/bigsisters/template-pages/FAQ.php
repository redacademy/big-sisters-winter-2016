<?php
/**
* Template Name: FAQ
**/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="page-header-style container">
			<h1>Frequently Asked Questions</h1>
		</section>
			<?php
			$loop1 = CFS()->get('faq_section');
			foreach($loop1 as $row1) : ?>
			<section class="page-header-style container">
			<h2><?php echo $row1['section_title']; ?></h2>
		</section>
			<?php
			$loop2 = $row1['frequently_asked_questions'];
			foreach($loop2 as $row2) : ?>
			<div class="accordian-box container">
				<div class="acr-box-div">
					<div class="info-panel-content">
						<p><?php echo $row2['question']; ?></p>
						<i class="fa fa-plus-circle"></i>
					</div>
					<div class="acr-box-content container">
						<?php echo $row2['answer'] ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	<?php endforeach; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
