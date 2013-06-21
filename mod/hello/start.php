<?php
function hello_init() {
   elgg_register_widget_type('helloworld', 'Hello, world!', 'The "Hello, world!" widget');
   elgg_register_page_handler('hello', 'hello_page_handler');
}
function hello_page_handler($page){
	include_once('pages/index.php');
	return TRUE;
}

//site navigation

$item = new ElggMenuItem('hello', elgg_echo('hello'), 'hello/all');
	elgg_register_menu_item('site', $item);

elgg_register_event_handler('init', 'system', 'hello_init');       


?>