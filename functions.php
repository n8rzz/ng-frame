<?php 

require get_template_directory() . '/inc/ng_frame_enques.php';
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
require get_template_directory() . '/inc/bootstrap_utilities.php';


add_action( 'after_setup_theme', 'ng_frame_theme_setup' );

function ng_frame_theme_setup() {
	
	/* add theme-supported features */
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'ng-frame-featured-thumbnail', 9999, 300 );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) ); // switch default core to output valid HTML5


    //nav menus
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'ng-frame' ),
	    'footer' => __( 'Footer Menu', 'ng-frame' )
	) );

	/* add custom actions */
	//	add_action( 'widgets_init', 'ng_frame_register_sidebars' );
	add_action( 'wp_enqueue_scripts', 'ng_frame_load_scripts', 11 );
	add_action( 'wp_enqueue_scripts', 'ng_frame_load_styles', 11 );
	add_action( 'admin_menu', 'all_settings_link' );

	/* add custom filters */
	add_filter( 'wp_title', 'ng_frame_wp_title', 10, 2 );
	add_filter( 'user_contactmethods', 'ng_frame_userfields', 10, 1 );
	add_filter( 'the_content_more_link', 'remove_more_jump_link', 10, 1 );
}

/*--- ################### ---*/
/*--- ACTIONS ---*/
require get_template_directory() . '/inc/ng_frame_functions_actions.php';


/*--- FILTERS ---*/
require get_template_directory() . '/inc/ng_frame_functions_filters.php';
?>