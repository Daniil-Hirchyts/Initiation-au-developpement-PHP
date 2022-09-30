<?php
$v1 = readline("Entrez un nombre entier : ");
$v2 = readline("Entrez un nombre entier : ");
$v3 = readline("Entrez un nombre entier : ");
$v4 = readline("Entrez un nombre entier : ");
$v5 = readline("Entrez un nombre entier : ");
$v6 = readline("Entrez un nombre entier : ");
$v7 = readline("Entrez un nombre entier : ");
$v8 = readline("Entrez un nombre entier : ");
$v9 = readline("Entrez un nombre entier : ");
$v10 = readline("Entrez un nombre entier : ");
$v11 = readline("Entrez un nombre entier : ");
$v12 = readline("Entrez un nombre entier : ");
$v13 = readline("Entrez un nombre entier : ");
$v14 = readline("Entrez un nombre entier : ");
$v15 = readline("Entrez un nombre entier : ");
$v16 = readline("Entrez un nombre entier : ");
$r = "faux";
$c = true;
while (($v1 <= $v2) && ($v2 <= $v3) && ($v3 <= $v4) && ($v4 <= $v5) && ($v5 <= $v6) && ($v6 <= $v7) && ($v7 <= $v8) && ($v8 <= $v9) && ($v9 <= $v10) && ($v10 <= $v11) && ($v11 <= $v12) && ($v12 <= $v13) && ($v13 <= $v14) && ($v14 <= $v15) && ($v15 <= $v16) && ($c)) {
    $r = "vrai";
    $c = false;
}
echo $r;

//    $i = 1;
//    $n = readline("Entrez un nombre entier $i : ");
//    $p = $n;
//    $v = true;
//    for (++$i; $i < 17; ++$i) {
//        $n = readline("Entrez un nombre entier $i : ");
//        if ($n > $p) {
//            $p = $n;
//        }
//        else $v = false;
//    }
//    if ($v) echo "vrai";
//    else echo "faux";
