<?php

$date = date('m-d-y');

echo elgg_view('output/url', array('href'=> elgg_add_action_tokens_to_url('action/breadbin/add'), 'text'=> 'add bread <br>', 'class'=> 'add_bread'));

echo elgg_view('output/url', array('href'=> elgg_add_action_tokens_to_url('action/breadbin/add_toast'), 'text'=> 'add toast' ));

?>

<div class="text">
	<p>This is what is included in my page.</p>
</div>

	<p>The current date is ' . <?php echo $date; ?></p>

	<a href="http://www.google.com"> Google link </a>

	<iframe width="560" height="315" src="http://www.youtube.com/embed/rgWr2nln83s" frameborder="0" allowfullscreen></iframe>