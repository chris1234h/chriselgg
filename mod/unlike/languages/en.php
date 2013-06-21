<?php
/**
 * Likes English language file
 */

$english = array(
	'unlike:this' => 'unliked this',
	'unlike:deleted' => 'Your unlike has been removed',
	'unlike:see' => 'See who unliked this',
	'unlike:remove' => 'remove your unlike',
	'unlike:notdeleted' => 'There was a problem removing your unlike',
	'unlike:unlike' => 'You now unlike this item',
	'unlike:failure' => 'There was a problem unliking this item',
	'unlike:alreadyunliked' => 'You have already unliked this item',
	'unlike:notfound' => 'The item you are trying to unlike cannot be found',
	'unlike:unlikethis' => 'Unlike this',
	'unlike:userunlikedthis' => '%s unlike',
	'unlike:usersunlikedthis' => '%s unlikes',
	'unlike:river:annotate' => 'unlikes',
	'unlike:delete:confirm' => 'Are you sure you want to delete this unlike?',

	'river:unlike' => 'unlike %s %s',

	// notifications. yikes.
	'unlike:notifications:subject' => '%s unlikes your post "%s"',
	'unlike:notifications:body' =>
'Hi %1$s,

%2$s unliked your post "%3$s" on %4$s

See your original post here:

%5$s

or view %2$s\'s profile here:

%6$s

Thanks,
%4$s
',
	
);

add_translation('en', $english);
