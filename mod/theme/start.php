<?php

/*
 * Project Name:            Theme
 * Project Description:     Theme for Elgg 1.8
 * Author:                  Chris Harding
 */
function theme_init(){
	


elgg_extend_view('page/elements/elgg','page/elements/header_logo');
	elgg_extend_view('page/elements/elgg','page/elements/sidebar');
	elgg_extend_view('page/layouts/content/elgg','page/layouts/content/header');
	elgg_unregister_menu_item('topbar', 'elgg_logo');

elgg_extend_view('css/elements/elgg','css/elements/layout');
	elgg_extend_view('css/elements/elgg','css/elements/buttons');
	elgg_extend_view('css/elements/elgg','css/elements/icons');
	elgg_extend_view('css/elements/elgg','css/elements/navigation');
	
}

elgg_register_event_handler('init', 'system', 'theme_init');