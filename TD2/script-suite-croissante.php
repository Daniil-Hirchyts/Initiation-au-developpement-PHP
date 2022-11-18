<?php
$nb = readline();
$n = readline();
$p = $n;
$finSuite = false;
$suite = true;
$i = 1;
while (!$finSuite && $suite) {
    $n = readline();
    if ($n > $p) $p = $n;
    else $suite = false;
    $i++;
    if ($i >= $nb) $finSuite = true;
}
if ($suite) echo("vrai");
else echo "faux";