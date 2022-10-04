<?php
function estPalindrome(array $tab):bool
{
    $i = 0;
    $j = count($tab) - 1;
    while ($i < $j){
        if ($tab[$i] != $tab[$j]){
            return false;
        }
        $i++;
        $j--;
    }
    return true;
}