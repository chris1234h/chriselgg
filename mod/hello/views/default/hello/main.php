<?php

$date = date('m-d-y');

$file = "./bread.txt";
$write = "This is bread one\n";

file_put_contents($file , $write , FILE_APPEND);

?>


<p>This is what is included in my page.</p>

<p>The current date is ' . <?php echo $date; ?></p>

<a href="http://www.google.com"> Google link </a>

<iframe width="560" height="315" src="http://www.youtube.com/embed/rgWr2nln83s" frameborder="0" allowfullscreen></iframe>