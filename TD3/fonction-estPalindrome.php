<?php
// fichier fonction-estPalindrome.php

/**
 * Donnée : une chaîne de caractères
 * Résultat : retourne vrai si l'entier est un palindrome, faux sinon
 */
function estPalindrome(string $tab): bool
{
    $i = 0;
    $j = strlen($tab) - 1;
    while ($i < $j) {
        if ($tab[$i] != $tab[$j]) {
            return false;
        }
        $i++;
        $j--;
    }
    return true;
}
