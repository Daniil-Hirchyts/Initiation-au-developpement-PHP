<?php
    $n = 0;
    $m = 0;
    $c = "";
    while ($c != ".") {
        $c = fgetc(STDIN);
        if ($c != ' ') ++$n;
        if ($c == ' ') {
            $m = $n;
            $n = 0;
        }

    }
if ($n >= $m) $m = $n - 1;
    echo "###$m###";
