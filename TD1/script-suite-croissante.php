<?php
    $i = 1;
    $n = readline("Entrez un nombre entier $i : ");
    $p = $n;
    $v = true;
    for (++$i; $i < 17; ++$i) {
        $n = readline("Entrez un nombre entier $i : ");
        if ($n > $p) {
            $p = $n;
        }
        else $v = false;
    }
    if ($v) echo "vrai";
    else echo "faux";
