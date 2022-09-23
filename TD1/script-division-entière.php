<?php
    $n = readline("Entrez un nombre entier : ");
    $p = readline("Entrez un diviseur : ");
    $r = $n % $p;
    $q = ($n - $r) / $p;
    echo "$n = $p x $q + $r";
