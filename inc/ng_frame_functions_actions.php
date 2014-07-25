<?php
/*--- ACTIONS ---*/

//function ng_fame_register_sidebars() { 
//	/* register sidebars */
//}

// CUSTOM ADMIN MENU LINK FOR ALL SETTINGS
function all_settings_link() {
	add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}
?>