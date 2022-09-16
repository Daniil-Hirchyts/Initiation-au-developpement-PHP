<?php
    $n = readline();
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; ++$i) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    echo ("###$c###");
