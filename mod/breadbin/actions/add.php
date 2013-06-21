<?php

$user = elgg_get_logged_in_user_entity();

$bread = new ElggObject;
$bread->subtype = 'breadbin';
$bread->save();




