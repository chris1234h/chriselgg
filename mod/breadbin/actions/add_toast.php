<?php

$user = elgg_get_logged_in_user_entity();

$toast = new ElggObject;
$toast->subtype = 'toaster';
$toast->save();
