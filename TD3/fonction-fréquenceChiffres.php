<?php

function fréquenceChiffres(int $n): array
{
    $tab = array(0,0,0,0,0,0,0,0,0,0);
    while($n>0){
        $tab[$n%10]++;
        $n = (int)($n/10);
    }
    return $tab;
}
