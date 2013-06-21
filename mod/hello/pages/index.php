<?php

$title = 'Breadbin';

$body = elgg_view_layout('content', array(
	'content' => elgg_view("hello/main"),
	'title' => $title,
	'filter' => '',
));

echo elgg_view_page($title, $body);





