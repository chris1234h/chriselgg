<?php
 
function swhite_init() {
    // Extend system CSS with our own styles
    
	elgg_extend_view('page/elements/elgg','page/elements/header_logo');
	elgg_extend_view('page/elements/elgg','page/elements/sidebar');
	elgg_extend_view('css/elements/elgg','css/elements/layout');
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	
	
	
	
	
	
	
    // Replace the default index page
    register_plugin_hook('index','system','new_index');
	
	
			

	
	
}
 
function new_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/swhite/index.php"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init','system','swhite_init');
?>