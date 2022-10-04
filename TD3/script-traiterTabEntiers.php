<?php
    require ("fonction-saisirTabEntiers.php");
    require ("fonction-moyenne.php");
    require ("procédure-afficherTabEntiers.php");

    //a
    $nb = readline("Entrez un nombre entier : ");
    $a = saisirTabEntiers($nb);

    //b
    $b = afficherTabEntiers($a);
    echo "\n";

    //c
    echo $c = moyenne($a) . "\n";

    //d
    for ($i = 0; $i < count($a); ++$i) if ($a[$i] % 2 == 0) ++$a[$i];
    //e
    $e = afficherTabEntiers($a);
    echo "\n";
