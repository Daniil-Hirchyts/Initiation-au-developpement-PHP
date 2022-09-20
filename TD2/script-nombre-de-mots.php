<?php
    $c = "";
    $n = 1;
    while ($c != ".") {
        $c = fgetc(STDIN);
        if ($c == ' ') ++$n;
    }
    echo "###$n###";
