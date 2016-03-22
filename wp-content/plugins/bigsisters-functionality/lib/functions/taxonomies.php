<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // testimonial taxonomy
 // Register Custom Taxonomy
 function story_taxonomy() {

 	$labels = array(
 		'name'                       => 'Stories',
 		'singular_name'              => 'Story',
 		'menu_name'                  => 'Story',
 		'all_items'                  => 'All Stories',
 		'parent_item'                => 'Parent Stories',
 		'parent_item_colon'          => 'Parent Story:',
 		'new_item_name'              => 'New StoryName',
 		'add_new_item'               => 'Add New Story',
 		'edit_item'                  => 'Edit Story',
 		'update_item'                => 'Update Story',
 		'view_item'                  => 'View Story',
 		'separate_items_with_commas' => 'Separate Stories with commas',
 		'add_or_remove_items'        => 'Add or remove Stories',
 		'choose_from_most_used'      => 'Choose from the most used',
 		'popular_items'              => 'Popular Stories',
 		'search_items'               => 'Search Stories',
 		'not_found'                  => 'Not Found',
 		'no_terms'                   => 'No Stories',
 		'items_list'                 => 'Stories list',
 		'items_list_navigation'      => 'Stories list navigation',
 	);
 	$rewrite = array(
 		'slug'                       => 'story',
 		'with_front'                 => true,
 		'hierarchical'               => false,
 	);
 	$args = array(
 		'labels'                     => $labels,
 		'hierarchical'               => false,
 		'public'                     => true,
 		'show_ui'                    => true,
 		'show_admin_column'          => true,
 		'show_in_nav_menus'          => true,
 		'show_tagcloud'              => true,
 		'query_var'                  => 'story',
 		'rewrite'                    => $rewrite,
 	);
 	register_taxonomy( 'story', array( 'post' ), $args );

 }
 add_action( 'init', 'story_taxonomy', 0 );
