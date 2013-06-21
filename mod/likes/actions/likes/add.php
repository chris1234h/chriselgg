<?php
/**
 * Elgg add like action
 *
 */

$entity_guid = (int) get_input('guid');

//check to see if the user has already liked the item
if (elgg_annotation_exists($entity_guid, 'likes')) {
	system_message(elgg_echo("likes:alreadyliked"));
	forward(REFERER);
}


//when like is clicked unlike is removed 
$user = elgg_get_logged_in_user_entity();
if (elgg_annotation_exists($entity_guid, 'unlike')) {
	elgg_delete_annotations(array(
		'annotation_names'=> array('unlike'), 
		'annotation_owner_guids'=>array($user->guid)
	));
}

// Let's see if we can get an entity with the specified GUID
$entity = get_entity($entity_guid);
if (!$entity) {
	register_error(elgg_echo("likes:notfound"));
	forward(REFERER);
}

// limit likes through a plugin hook (to prevent liking your own content for example)
if (!$entity->canAnnotate(0, 'likes')) {
	// plugins should register the error message to explain why liking isn't allowed
	forward(REFERER);
}


$annotation = create_annotation($entity->guid,
								'likes',
								"likes",
								"",
								$user->guid,
								$entity->access_id);

// tell user annotation didn't work if that is the case
if (!$annotation) {
	register_error(elgg_echo("likes:failure"));
	forward(REFERER);
}

// notify if poster wasn't owner
if ($entity->owner_guid != $user->guid) {

	likes_notify_user($entity->getOwnerEntity(), $user, $entity);
}

system_message(elgg_echo("likes:likes"));

// Forward back to the page where the user 'liked' the object
forward(REFERER);
