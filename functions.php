<?php

require_once('admin/wp_bootstrap_navwalker.php');
require_once('admin/bootstrap_utilities.php');

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'ng-frame-featured-thumbnail', 9999, 300 );
}

//nav menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ng-frame' ),
    'footer' => __( 'Footer Menu', 'ng-frame' )
) );
?>