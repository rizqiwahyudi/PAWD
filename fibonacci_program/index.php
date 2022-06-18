<?php

$previous_number = 0;
$next_number = 1;
for ($i=0; $i < 10; $i++) { 
    $output = $next_number + $previous_number;
    echo $output.',';

    $previous_number = $next_number;
    $next_number = $output;
}

?>