<?php

for ($i=1; $i < 100; $i++) { 
    $t = 0;

    for ($j=1; $j <= $i; $j++) { 
        if ($i % $j == 0) {
            $t++;
        }
    }

    if ($t == 2) {
        echo $i.'<br>';
    }
}

?>