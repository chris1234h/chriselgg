<?php
function breadbin_init() {
   elgg_register_widget_type('breadbin', 'Bread Bin Analsis', 'The "Bread_Bin" widget');
   elgg_register_page_handler('breadbin', 'breadbin_page_handler');
   
   $item = new ElggMenuItem('breadbin', elgg_echo('Bread Bin'), 'breadbin/all');
	elgg_register_menu_item('site', $item);
	
	elgg_extend_view('css/elgg', 'bread/css');
	$action_path = elgg_get_plugins_path() . 'breadbin/actions';
	elgg_register_action('breadbin/add', "$action_path/add.php");
	
	elgg_register_action('breadbin/add_toast', "$action_path/add_toast.php");
	
}
function breadbin_page_handler($page){
	
	$user = get_user_by_username($page[0]);

	$pages = dirname(__FILE__) . '/pages';

	switch ($page[0]) {
		case "index":
			include "$pages/index.php";
			break;
			
		case "add":
			include "$pages/add.php";
			break;
			
		default:
			include "$pages/index.php";
			return false;
	} 
	return true;
}

//site navigation



elgg_register_event_handler('init', 'system', 'breadbin_init');       


	// user usernames
	