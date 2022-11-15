<?php
require("fonction-saisirTabEntiers.php");
require("fonction-moyenne.php");
require("procédure-afficherTabEntiers.php");
$a = saisirTabEntiers(16);
$b = afficherTabEntiers($a);
echo "\n";
echo $c = moyenne($a) . "\n";
for ($i = 0; $i < count($a); ++$i) if ($a[$i] % 2 == 0) ++$a[$i];
$e = afficherTabEntiers($a);
echo "\n";