<?php 
	
function ng_frame_load_javascripts() {
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array('jquery'), '1.11.0', true  );
	wp_register_script( 'bootstrapjs', '//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('bootstrapjs'), '3.1.1', true );

//	wp_enqueue_script( 'jquery' );
//	wp_enqueue_script( 'bootstrapjs' );
}


?>