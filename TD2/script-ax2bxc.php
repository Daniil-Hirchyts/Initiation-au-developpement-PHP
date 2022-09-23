<?php
    $a = readline("Entrez un nombre entier : ");
    $b = readline("Entrez un nombre entier : ");
    $c = readline("Entrez un nombre entier : ");

    $d = $b * $b - 4 * $a * $c;

    if ($d < 0) echo "pas de solutions";
    else if ($d == 0) {
        $x = -$b / (2 * $a);
        echo "x=$x";
    }
    else {
        $x1 = (-$b - sqrt($d)) / (2 * $a);
        $x2 = (-$b + sqrt($d)) / (2 * $a);
        echo "x1=$x1 et x2=$x2";
    }