<?php

function ng_frame_show_req_plugin_messages() {
	
	$plugin_messages = array();

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// Download the Yoast WordPress SEO plugin
	if ( !is_plugin_active( 'wordpress-seo/wp-seo.php' )) {
		$plugin_messages[] = 'This theme requires you to install the <a href="http://wordpress.org/plugins/wordpress-seo/">Yoast WordPress SEO plugin</a>.';
	}

	if ( !is_plugin_active( 'wp-pagenavi/wp-pagenavi.php' ) ) {
		$plugin_messages[] = 'This theme requires you to install the <a href="http://wordpress.org/plugins/wp-pagenavi/">WP-Pagenavi plugin</a>.';
	}

	if ( !is_plugin_active( 'yet-another-related-posts-plugin/yarpp.php' )) {
		$plugin_messages[] = 'This theme requires you to install the <a href="https://wordpress.org/plugins/yet-another-related-posts-plugin/">Yet Another Related Posts Plugin</a>';
	}

	if(count($plugin_messages) > 0) {
		echo '<div id="message" class="error">';

			foreach($plugin_messages as $message) {
				echo '<p><strong>'.$message.'</strong></p>';
			}

		echo '</div>';
	}
}
?>