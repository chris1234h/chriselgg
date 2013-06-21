<?php

$entity= $vars['entity'];

$owner= $entity->getOwnerEntity();

echo $owner->name;

echo elgg_view_friendly_time($entity->time_created);