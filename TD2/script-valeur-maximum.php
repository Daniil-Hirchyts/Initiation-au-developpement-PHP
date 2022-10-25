<?php
$i = 1;
$v = readline("Entrez une valeur #$i: ");
$max = $v;
for (; $i < 21; ++$i) {
    $v = readline("Entrez une valeur #$i: ");
    if ($v > $max) {
        $max = $v;
    }
}
echo($max);

