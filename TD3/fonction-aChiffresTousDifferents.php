<?php

// fichier fonction-aChiffresTousDifferents.php

/**
 * Donnée : un nombre entier
 * Résultat : retourne vrai si les chiffres de l'entier sont tous différents, faux sinon
 */
require "fonction-fréquenceChiffres.php";
function aChiffresTousDifferents(int $n): bool
{
    $tab = fréquenceChiffres($n);
    $i = 0;
    while ($i < 10) {
        if ($tab[$i] > 1) return false;
        $i++;
    }
    return true;
}
