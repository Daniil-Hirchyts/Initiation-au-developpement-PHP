<?php
$i = 1;
$nbr = readline("Entrez un nombre entier : ");
$n = readline("Entrez un nombre entier $i : ");
$p = $n;
$v = true;
while ($i < $nbr) {
    ++$i;
    $n = readline("Entrez un nombre entier $i : ");
    if ($n > $p) {
        $p = $n;
    } else $v = false;
}
if ($v) echo "vrai";
else echo "faux";
