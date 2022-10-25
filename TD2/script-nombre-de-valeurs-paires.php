<?php
$v = readline("Entrez une valeur: ");
$n = 0;
while ($v != 0) {
    if ($v % 2 == 0) {
        ++$n;
    }
    $v = readline("Entrez une valeur: ");
}
echo(++$n);
