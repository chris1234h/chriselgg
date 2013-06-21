<?php
 
echo "Hello, world!";

?>

<?php 
    $widget = $vars['entity'];
 
    // Always use the corresponding output/* view for security!
    echo elgg_view('output/text', array('value' => $widget->message)); 
?>