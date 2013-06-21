<?php
/**
 * Elgg add like action
 *
 */

$entity_guid = (int) get_input('guid');

//check to see if the user has already liked the item
if (elgg_annotation_exists($entity_guid, 'unlike')) {
	system_message(elgg_echo("unlike:alreadyunliked"));
	forward(REFERER);
}

//reduce likes if unlike is clicked on
$user = elgg_get_logged_in_user_entity();
if (elgg_annotation_exists($entity_guid, 'likes')) {
	elgg_delete_annotations(array(
		'annotation_names'=> array('likes'), 
		'annotation_owner_guids'=>array($user->guid)
	));
}

// Let's see if we can get an entity with the specified GUID
$entity = get_entity($entity_guid);
if (!$entity) {
	register_error(elgg_echo("unlike:notfound"));
	forward(REFERER);
}

// limit likes through a plugin hook (to prevent liking your own content for example)
if (!$entity->canAnnotate(0, 'unlike')) {
	// plugins should register the error message to explain why liking isn't allowed
	forward(REFERER);
}


$annotation = create_annotation($entity->guid,
								'unlike',
								"unlike",
								"",
								$user->guid,
								$entity->access_id);

// tell user annotation didn't work if that is the case
if (!$annotation) {
	register_error(elgg_echo("unlike:failure"));
	forward(REFERER);
}

// notify if poster wasn't owner
if ($entity->owner_guid != $user->guid) {

	likes_notify_user($entity->getOwnerEntity(), $user, $entity);
}

system_message(elgg_echo("unlike:unlike"));

// Forward back to the page where the user 'liked' the object
forward(REFERER);
