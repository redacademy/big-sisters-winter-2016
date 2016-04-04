<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Add Success Stories to site
function story_post_type() {

	$labels = array(
		'name'                  => 'Stories',
		'singular_name'         => 'Story',
		'menu_name'             => 'Success Story',
		'name_admin_bar'        => 'Success Story',
		'archives'              => 'Story Archives',
		'parent_item_colon'     => 'Parent Story:',
		'all_items'             => 'All Stories',
		'add_new_item'          => 'Add New Story',
		'add_new'               => 'Add New',
		'new_item'              => 'New Story',
		'edit_item'             => 'Edit Story',
		'update_item'           => 'Update Story',
		'view_item'             => 'View Story',
		'search_items'          => 'Search Story',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Story',
		'uploaded_to_this_item' => 'Uploaded to this Story',
		'items_list'            => 'Stories list',
		'items_list_navigation' => 'Stories list navigation',
		'filter_items_list'     => 'Filter Stories list',
	);
	$args = array(
		'label'                 => 'Story',
		'description'           => 'Success Story',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'story',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'story', $args );

}
add_action( 'init', 'story_post_type', 0 );

// Register Board Of Directors Post-type
function directors_post_type() {

	$labels = array(
		'name'                  => 'Directors',
		'singular_name'         => 'Director',
		'menu_name'             => 'Board Of Directors',
		'name_admin_bar'        => 'Board Of Directors',
		'archives'              => 'Director Archives',
		'parent_item_colon'     => 'Parent Director:',
		'all_items'             => 'All Directors',
		'add_new_item'          => 'Add New Director',
		'add_new'               => 'Add New',
		'new_item'              => 'New Director',
		'edit_item'             => 'Edit Director',
		'update_item'           => 'Update Director',
		'view_item'             => 'View Director',
		'search_items'          => 'Search Director',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Director',
		'uploaded_to_this_item' => 'Uploaded to this Director',
		'items_list'            => 'Directors list',
		'items_list_navigation' => 'Directors list navigation',
		'filter_items_list'     => 'Filter Directors list',
	);
	$args = array(
		'label'                 => 'Director',
		'description'           => 'Board Of Directors',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'director',
		'capability_type'       => 'page',
	);
	register_post_type( 'director', $args );

}
add_action( 'init', 'directors_post_type', 0 );

// Register Careers Post Type
function careers_post_type() {

	$labels = array(
		'name'                  => 'Careers',
		'singular_name'         => 'Career',
		'menu_name'             => 'Careers',
		'name_admin_bar'        => 'Careers',
		'archives'              => 'Career Archives',
		'parent_item_colon'     => 'Parent Career:',
		'all_items'             => 'All Careers',
		'add_new_item'          => 'Add New Career',
		'add_new'               => 'Add New',
		'new_item'              => 'New Career',
		'edit_item'             => 'Edit Career',
		'update_item'           => 'Update Career',
		'view_item'             => 'View Career',
		'search_items'          => 'Search Career',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Career',
		'uploaded_to_this_item' => 'Uploaded to this Career',
		'items_list'            => 'Careers list',
		'items_list_navigation' => 'Careers list navigation',
		'filter_items_list'     => 'Filter Careers list',
	);
	$args = array(
		'label'                 => 'Career',
		'description'           => 'List of all available careers',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'careers',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'career', $args );

}
add_action( 'init', 'careers_post_type', 0 );

// Register News Post Type
function news_post_type() {

	$labels = array(
		'name'                  => 'News',
		'singular_name'         => 'News',
		'menu_name'             => 'News',
		'name_admin_bar'        => 'News',
		'archives'              => 'News Archives',
		'parent_item_colon'     => 'Parent News:',
		'all_items'             => 'All News',
		'add_new_item'          => 'Add New News',
		'add_new'               => 'Add News',
		'new_item'              => 'New News',
		'edit_item'             => 'Edit News',
		'update_item'           => 'Update News',
		'view_item'             => 'View News',
		'search_items'          => 'Search News',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into News',
		'uploaded_to_this_item' => 'Uploaded to this News',
		'items_list'            => 'News list',
		'items_list_navigation' => 'News list navigation',
		'filter_items_list'     => 'Filter News list',
	);
	$args = array(
		'label'                 => 'News',
		'description'           => 'Latest News',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-document',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'news',
		'capability_type'       => 'page',
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'news_post_type', 0 );

// Register Events Post Type
function events_post_type() {

	$labels = array(
		'name'                  => 'Events',
		'singular_name'         => 'Event',
		'menu_name'             => 'Add An Event',
		'name_admin_bar'        => 'Add An Event',
		'archives'              => 'Event Archives',
		'parent_item_colon'     => 'Parent Event:',
		'all_items'             => 'All Events',
		'add_new_item'          => 'Add New Event',
		'add_new'               => 'Add New',
		'new_item'              => 'New Event',
		'edit_item'             => 'Edit Event',
		'update_item'           => 'Update Event',
		'view_item'             => 'View Event',
		'search_items'          => 'Search Event',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Event',
		'uploaded_to_this_item' => 'Uploaded to this Event',
		'items_list'            => 'Events list',
		'items_list_navigation' => 'Events list navigation',
		'filter_items_list'     => 'Filter Events list',
	);
	$args = array(
		'label'                 => 'Event',
		'description'           => 'Big Sisters Events',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'events',
		'capability_type'       => 'page',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'events_post_type', 0 );
