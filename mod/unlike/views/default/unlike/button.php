<?php
/**
 * Elgg likes button
 *
 * @uses $vars['entity']
 */

if (!isset($vars['entity'])) {
	return true;
}

$guid = $vars['entity']->getGUID();

// check to see if the user has already liked this
if (elgg_is_logged_in() && $vars['entity']->canAnnotate(0, 'unlike')) {
	if (!elgg_annotation_exists($guid, 'unlike')) {
		$url = elgg_get_site_url() . "action/unlike/add?guid={$guid}";
		$params = array(
			'href' => $url,
			'text' => elgg_view_icon('thumbs-down'),
			'title' => elgg_echo('unlike:unlikethis'),
			'is_action' => true,
			'is_trusted' => true,
		);
		$unlike_button = elgg_view('output/url', $params);
	} else {
		$url = elgg_get_site_url() . "action/unlike/delete?guid={$guid}";
		$params = array(
			'href' => $url,
			'text' => elgg_view_icon('thumbs-down-alt'),
			'title' => elgg_echo('unlike:remove'),
			'is_action' => true,
			'is_trusted' => true,
		);
		$unlike_button = elgg_view('output/url', $params);
	}
}

echo $unlike_button;
