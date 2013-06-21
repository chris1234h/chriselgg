<?php

$title = 'Bread Bin Analysis';
$list = elgg_list_entities(array(
							'type'=>'object', 
							'subtype'=> 'breadbin',
							'limit'=> 10

));

$list_more = elgg_list_entities(array(
								'type'=> 'object',
								'subtype'=> 'toaster',
								'limit'=> 10

));

$body = elgg_view_layout('content', array(
	'content' => elgg_view('bread/main') . $list. $list_more,
	'title' => $title,
	'filter' => '',
));

echo elgg_view_page($title, $body);





