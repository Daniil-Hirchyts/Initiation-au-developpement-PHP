<?php
$i = 1;
$nbr = readline("Entrez un nombre entier : ");
++$nbr;
$n = readline("Entrez un nombre entier $i : ");
$p = $n;
$v = true;
for (++$i; $i < $nbr; ++$i) {
    $n = readline("Entrez un nombre entier $i : ");
    if ($n > $p) {
        $p = $n;
    } else $v = false;
}
if ($v) echo "vrai";
else echo "faux";
