<?php
function estPalindrome(string $tab):bool
{
    $i = 0;
    $j = strlen($tab) - 1;
    while ($i < $j){
        if ($tab[$i] != $tab[$j]){
            return false;
        }
        $i++;
        $j--;
    }
    return true;
}
