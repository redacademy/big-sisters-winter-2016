<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
 // Register Custom Taxonomy
 function events_taxonomy() {

 	$labels = array(
 		'name'                       => 'Events',
 		'singular_name'              => 'Event',
 		'menu_name'                  => 'Event Type',
 		'all_items'                  => 'All Events',
 		'parent_item'                => 'Parent Event',
 		'parent_item_colon'          => 'Parent Event:',
 		'new_item_name'              => 'New Event Name',
 		'add_new_item'               => 'Add New Event',
 		'edit_item'                  => 'Edit Event',
 		'update_item'                => 'Update Event',
 		'view_item'                  => 'View Event',
 		'separate_items_with_commas' => 'Separate Events with commas',
 		'add_or_remove_items'        => 'Add or remove Events',
 		'choose_from_most_used'      => 'Choose from the most used',
 		'popular_items'              => 'Popular Events',
 		'search_items'               => 'Search Events',
 		'not_found'                  => 'Not Found',
 		'no_terms'                   => 'No Events',
 		'items_list'                 => 'Events list',
 		'items_list_navigation'      => 'Events list navigation',
 	);
 	$args = array(
 		'labels'                     => $labels,
 		'hierarchical'               => false,
 		'public'                     => true,
 		'show_ui'                    => true,
 		'show_admin_column'          => true,
 		'show_in_nav_menus'          => true,
 		'show_tagcloud'              => true,
 	);
 	register_taxonomy( 'events_tax', array( 'events' ), $args );

 }
 add_action( 'init', 'events_taxonomy', 0 );
