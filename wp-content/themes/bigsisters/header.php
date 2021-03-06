<?php
/**
 * The header for our theme.
 *
 * @package Big_Sisters_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header">
				<nav id="site-navigation" class="main-navigation">
					<a class="logo-wrap" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/bigsisters-logo.png" alt="Big Sisters of BC Lower Mainland">
					</a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
