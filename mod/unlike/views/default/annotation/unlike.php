<?php
/**
 * Elgg show the users who liked the object
 *
 * @uses $vars['annotation']
 */

if (!isset($vars['annotation'])) {
	return true;
}

$unlikes = $vars['annotation'];

$user = $unlikes->getOwnerEntity();
if (!$user) {
	return true;
}

$user_icon = elgg_view_entity_icon($user, 'tiny');
$user_link = elgg_view('output/url', array(
	'href' => $user->getURL(),
	'text' => $user->name,
	'is_trusted' => true,
));

$unlike_string = elgg_echo('unlike:this');

$friendlytime = elgg_view_friendly_time($unlikes->time_created);

if ($unlikes->canEdit()) {
	$delete_button = elgg_view("output/confirmlink",array(
    	'href' => "action/unlike/delete?id={$unlikes->id}",
    	'text' => "<span class=\"elgg-icon elgg-icon-delete float-alt\"></span>",
    	'confirm' => elgg_echo('unlike:delete:confirm'),
    	'encode_text' => false,
    ));
}

$body = <<<HTML
<p class="mbn">
	$delete_button
	$user_link $unlike_string
	<span class="elgg-subtext">
		$friendlytime
	</span>
</p>
HTML;

echo elgg_view_image_block($user_icon, $body);
