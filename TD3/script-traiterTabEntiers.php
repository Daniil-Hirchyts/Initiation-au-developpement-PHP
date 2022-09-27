<?php
    require ("fonction-saisirTabEntiers.php");
    require ("fonction-moyenne.php");
    require ("procédure-afficherTabEntiers.php");
    //a
    $a = saisirTabEntiers(5);
    //b
    $b = afficherTabEntiers($a);
    //c
    $c = moyenne($a);
    //d

    $tmp = array();
    for ($j = 0; $j < count($a); $j++) {
        $tmp[$j] = $a[$j];
    }
    for($i = 1; $i <= count($tmp); $i++) if ($i % 2 == 0) $tmp[$i] += 1;
    //e
    $e = afficherTabEntiers($tmp);
