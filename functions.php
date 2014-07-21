<?php

require_once('admin/wp_bootstrap_navwalker.php');
require_once('admin/bootstrap_utilities.php');


//nav menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ng-frame' ),
    'footer' => __( 'Footer Menu', 'ng-frame' )
) );
?>