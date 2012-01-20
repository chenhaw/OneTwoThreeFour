<?php
/**
 * The custom functions for this theme.
 *
 * @package WordPress
 * @subpackage OneTwoThreeFour
 * @since OneTwoThreeFour 0.1
 */
?>
<?php
add_action( 'init', 'register_ips_announcement' );

function register_ips_announcement() {

    $labels = array( 
        'name' => _x( 'Announcement', 'announcement' ),
        'singular_name' => _x( 'Announcement', 'announcement' ),
        'add_new' => _x( 'Add New', 'announcement' ),
        'add_new_item' => _x( 'Add New Announcement', 'announcement' ),
        'edit_item' => _x( 'Edit Announcement', 'announcement' ),
        'new_item' => _x( 'New Announcement', 'announcement' ),
        'view_item' => _x( 'View Announcement', 'announcement' ),
        'search_items' => _x( 'Search Announcement', 'announcement' ),
        'not_found' => _x( 'No announcement found', 'announcement' ),
        'not_found_in_trash' => _x( 'No announcement found in Trash', 'announcement' ),
        'parent_item_colon' => _x( 'Parent Announcement:', 'announcement' ),
        'menu_name' => _x( 'Announcements', 'announcement' ),
    );

    $args = array( 
		'label' => 'Announcement',
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'editor', 'author' ),
        'taxonomies' => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
		'menu_position' => 5,        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'announcement', $args );
}

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary' ),
			'description' => __( 'This sidebar is located on each page.' ),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);

	register_sidebar(
		array(
			'id' => 'footer-1',
			'name' => __( 'Footer 1' ),
			'description' => __( 'The left column of the three columns.' ),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
	
	register_sidebar(
		array(
			'id' => 'footer-2',
			'name' => __( 'Footer 2' ),
			'description' => __( 'The middle column of the three columns.' ),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
	
	register_sidebar(
		array(
			'id' => 'footer-3',
			'name' => __( 'Footer 3' ),
			'description' => __( 'The right column of the three columns.' ),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
}

function md_list_pages( $args ) {

	$defaults = array(
		'depth' => 0, 'show_date' => '',
		'child_of' => 0, 'exclude' => '',
		'title_li' => __('Pages'), 'echo' => 1,
		'authors' => '', 'sort_column' => 'menu_order, post_title',
		'link_before' => '', 'link_after' => '',
		'include' => '', 'include_tree' => '',
		'exclude_tree' => '',
	);

	$r = wp_parse_args( $args, $defaults );

	$exclude = list_pages_tree( $r[ 'exclude' ], $r[ 'exclude_tree' ],
			$r[ 'depth' ] );
	$include = list_pages_tree( $r[ 'include' ], $r[ 'include_tree' ],
			$r[ 'depth' ] );

	$pages = wp_list_pages( 'depth=' . $r[ 'depth' ] . '&show_date='
			. $r[ 'show_date' ] . '&child_of=' . $r[ 'child_of' ]
			. '&exclude=' . $exclude . '&title_li='
			. $r[ 'title_li' ] . '&echo=0&authors='
            . $r[ 'authors' ] . '&sort_column='
            . $r[ 'sort_column' ] . '&link_before='
            . $r[ 'link_before' ] . '&link_after='
            . $r[ 'link_after' ] . '&include=' . $include );

	if($r['echo']){
    	echo $pages;
	} else {
    	return $pages;
	}

}

function list_pages_tree( $param, $tree, $depth ) {

	// get the parent pages of the tree
	$parent_pages = get_pages( 'include=' . $tree );

	foreach ( $parent_pages as $parent ) {
		if (!empty( $param ) ) {
			$param .= ",";
		}

		$param .= $parent->ID;

		// get the child pages of the tree
		$child_pages = get_pages ( 'child_of=' . $parent->ID
			. '&depth=' . $depth );

		foreach ( $child_pages as $child ) {
			$param .= "," . $child->ID;
		}
	}

	return $param;
}

add_action( 'init', 'register_my_menus' );
 
function register_my_menus() {
register_nav_menus(
array(
'menu-1' => __( 'Primary' ),
'menu-2' => __( 'Quick Access' ),
'menu-3' => __( 'Four 1' ),
'menu-4' => __( 'Four 2' ),
'menu-5' => __( 'Four 3' ),
'menu-6' => __( 'Four 4' ),
)
);
}

function mf_get_menu_name($location){
    if(!has_nav_menu($location)) return false;
    $menus = get_nav_menu_locations();
    $menu_title = wp_get_nav_menu_object($menus[$location])->name;
    return $menu_title;
}
?>