<?php

require "fonction-fréquenceChiffres.php";
function aChiffresTousDifferents(int $n): bool
{
    $tab = fréquenceChiffres($n);
    for($i=0;$i<10;$i++) if($tab[$i]>1) return false;
    return true;
}
