<?php

require "fonction-fréquenceChiffres.php";
function aChiffresTousDifferents(int $n): string
{
    $tab = fréquenceChiffres($n);
    for($i=0;$i<10;$i++) if($tab[$i]>1) return "faux";
    return "vrai";
}
