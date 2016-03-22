<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Add Success Stories to site
// Register Custom Post Type
// Register Custom Post Type
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
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', ),
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
