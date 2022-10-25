<?php
$n = readline("Entrez un nombre entier : ");
$p = readline("Entrez un diviseur : ");
$c = 0;
$tmp = $n;
while ($tmp >= $p) {
    $tmp -= $p;
    $c++;
}
echo "$n = $p x $c + $tmp";