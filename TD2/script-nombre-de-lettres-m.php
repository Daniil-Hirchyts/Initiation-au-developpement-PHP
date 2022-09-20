<?php
    $c = "";
    $n = 0;
    while ($c != ".") {
        $c = fgetc(STDIN);
        if ($c == 'm') ++$n;
    }
    echo "###$n###";

