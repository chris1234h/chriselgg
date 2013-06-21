<?php
/**
 * Elgg delete like action
 *
 */

// Support deleting by id in case we're deleting another user's likes
$id = (int) get_input('id');

$unlikes = NULL;
if ($id) {
	$unlikes = elgg_get_annotation_from_id($id);
}

if (!$unlikes) {
	$unlike = elgg_get_annotations(array(
		'guid' => (int) get_input('guid'),
		'annotation_owner_guid' => elgg_get_logged_in_user_guid(),
		'annotation_name' => 'unlike',
	));
	$unlikes = $unlike[0];
}

if ($unlikes && $unlikes->canEdit()) {
	$unlikes->delete();
	system_message(elgg_echo("unlike:deleted"));
	forward(REFERER);
}

register_error(elgg_echo("unlike:notdeleted"));
forward(REFERER);
