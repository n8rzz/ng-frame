<?php 

require_once('admin/ng_frame_enques.php');
require_once('admin/wp_bootstrap_navwalker.php');
require_once('admin/bootstrap_utilities.php');

//nav menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ng-frame' ),
    'footer' => __( 'Footer Menu', 'ng-frame' )
) );

add_action( 'after_setup_theme', 'ng_frame_theme_setup' );
function ng_frame_theme_setup() {
	
	/* add theme-supported features */
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
	    add_image_size( 'ng-frame-featured-thumbnail', 9999, 300 );
    }

	/* add custom actions */
//	add_action( 'widgets_init', 'ng_frame_register_sidebars' );
	add_action( 'wp_enqueue_scripts', 'ng_frame_load_javascripts' );
	add_action( 'admin_menu', 'all_settings_link' );

	/* add custom filters */
	add_filter( 'wp_title', 'ng_frame_wp_title', 10, 2 );
	add_filter( 'user_contactmethods', 'ng_frame_userfields', 10, 1 );
	add_filter( 'the_content_more_link', 'remove_more_jump_link', 10, 1 );
//	add_filter( 'the_content', 'ng_frame_date_archive_links', 10, 1 );
}

/*--- ################### ---*/

/*--- ACTIONS ---*/
//function ng_fame_register_sidebars() { 
//	/* register sidebars */
//}

// CUSTOM ADMIN MENU LINK FOR ALL SETTINGS
function all_settings_link() {
	add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}


/*--- FILTERS ---*/
/**
 * Provides a standard format for the page title depending on the view. This is
 * filtered so that plugins can provide alternative title formats.
 *
 * pulled from http://tommcfarlin.com/filter-wp-title/
 *
 * @param       string    $title    Default title text for current view.
 * @param       string    $sep      Optional separator.
 * @return      string              The filtered title.
 * @package     mayer
 * @subpackage  includes
 * @version     1.0.0
 * @since       1.0.0
 */
function ng_frame_wp_title( $title, $sep ) {
	global $paged, $page;
 
	if ( is_feed() ) {
		return $title;
	}
 
	$title .= get_bloginfo( 'name' );
 
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
 
	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = sprintf( __( 'Page %s', 'mayer' ), max( $paged, $page ) ) . " $sep $title";
	}
	return $title;
}

// adds social fields on author bio page
function ng_frame_userfields( $contactmethods ) {
	// add custom social links
	$contactmethods['twitter']  	= 'Twitter';
	$contactmethods['tumblr']		= 'Tumlbr';
	$contactmethods['github']		= 'Github';
	$contactmethods['instagram']	= 'Instagram';
	$contactmethods['google_plus']	= 'Google+';
	return $contactmethods;
}

// removes more link jump
function remove_more_jump_link($link) { 
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}

// get archive links for month day, year
function ng_frame_date_archive_links () {
	$arc_year = get_the_time('Y');
	$arc_month = get_the_time('m');
	$arc_day = get_the_time('d');
	$out = '';

	$out .= '<a href="' . get_month_link( $arc_year, $arc_month ). '" title="Archive for' . esc_attr( get_the_time( 'F Y' ) ) . '">' . get_the_time( 'F' ) . '</a>';
	$out .= ' <a href="' . get_day_link( $arc_year, $arc_month, $arc_day ). '" title="Archive for' . esc_attr( get_the_time( 'F d, Y' ) ) . '">' . $arc_day . '</a>';
	$out .= ', <a href="' . get_year_link( $arc_year ). '" title="Archive for' . esc_attr( get_the_time( 'Y' ) ) . '">' . $arc_year . '</a>';

	return $out;
}

?>