<?php
/**
 * Count of who has liked something
 *
 *  @uses $vars['entity']
 */


$list = '';
$num_of_unlike = unlike_count($vars['entity']);
$guid = $vars['entity']->getGUID();

if ($num_of_unlike) {
	// display the number of likes
	if ($num_of_unlike == 1) {
		$unlike_string = elgg_echo('unlike:userunlikedthis', array($num_of_unlike));
	} else {
		$unlike_string = elgg_echo('unlike:usersunlikedthis', array($num_of_unlikes));
	}
	$params = array(
		'text' => $unlike_string,
		'title' => elgg_echo('unlike:see'),
		'rel' => 'popup',
		'href' => "#unlike-$guid"
	);
	$list = elgg_view('output/url', $params);
	$list .= "<div class='elgg-module elgg-module-popup elgg-unlike hidden clearfix' id='unlike-$guid'>";
	$list .= elgg_list_annotations(array(
		'guid' => $guid,
		'annotation_name' => 'unlike',
		'limit' => 99,
		'list_class' => 'elgg-list-unlike'
	));
	$list .= "</div>";
	echo $list;
}
