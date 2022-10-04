<?php

function aChiffresTousDifferents(int $n): bool
{
    $tab = array(0,0,0,0,0,0,0,0,0,0);
    while($n>0){
        $tab[$n%10]++;
        $n = (int)($n/10);
    }
    for($i=0;$i<10;$i++){
        if($tab[$i]>1){
            return false;
        }
    }
    return true;
}
