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
		'taxonomies'            => array( 'category', 'post_tag' ),
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
		'taxonomies'            => array( 'category', 'post_tag' ),
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
		'taxonomies'            => array( 'category', 'post_tag' ),
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
