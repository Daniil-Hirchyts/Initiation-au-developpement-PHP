<?php
    require ("fonction-saisirTabEntiers.php");
    require ("fonction-moyenne.php");
    require ("procédure-afficherTabEntiers.php");

    //a
    $a = saisirTabEntiers(100);

    //b
    $b = afficherTabEntiers($a);
    echo "\n";

    //c
    echo $c = moyenne($a) . "\n";

    //d
    for ($i = 1; $i <= count($a); ++$i) if ($i % 2 == 0) ++$a[$i - 1];
    //e
    $e = afficherTabEntiers($a);
    echo "\n";
