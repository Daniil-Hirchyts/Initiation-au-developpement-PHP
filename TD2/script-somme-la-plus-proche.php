<?php
    $nb = readline("Entrez un nombre : ");
    $s = 0;
    $i = 0;
    while ($s < $nb) $s += ++$i;
    if ($s == $nb) echo $s;
    else {
        $s1 = $s - $nb;
        $s2 = $nb - ($s - $i);
        if ($s1 < $s2) $f = $s;
        else $f = $s - $i;
    }
    echo "###$f###";


