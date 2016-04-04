<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Big_Sisters_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function big_sisters_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'big_sisters_body_classes' );

/*
* filter archive post loops.
*/
function bigsisters_modify_archive_loop( $query ) {
	if ( is_post_type_archive( array( 'story', 'news' ) ) && !is_admin() && $query->is_main_query() ) {
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'DESC' );
		$query->set( 'posts_per_page', 3 );
	}
}
add_action('pre_get_posts', 'bigsisters_modify_archive_loop');

function big_sisters_login () {
    echo '<style type="text/css">
						h1 a {
						background-image:url('. get_template_directory_uri() .'/assets/images/bigsisters_2colour.png) !important;
						background-size:contain !important;
						width: 100% !important;}
					</style>';
}
add_action( 'login_head', 'big_sisters_login' );

function big_sisters_url () {
    return home_url();
}
add_filter( 'login_headerurl', 'big_sisters_url' );
