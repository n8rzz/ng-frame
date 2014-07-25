<?php 
function ng_frame_load_scripts() {
	wp_deregister_script( 'jquery');
    wp_register_script( 'jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", false, null );
	wp_register_script( 'bootstrapjs', '//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery'), '3.1.1', true );
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrapjs' );
}

function ng_frame_load_styles() {
	wp_register_style( 'bootstrapcdn', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' );
	wp_register_style( 'main-styles', get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'bootstrapcdn' );
	wp_enqueue_style( 'main-styles' );
}

/*
function enqueue_my_scripts() {
wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array('jquery'), '1.9.1', true); // we need the jquery library for bootsrap js to function
wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');
function enqueue_my_styles() {
wp_enqueue_style( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' );
wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_my_styles');
*/
?>