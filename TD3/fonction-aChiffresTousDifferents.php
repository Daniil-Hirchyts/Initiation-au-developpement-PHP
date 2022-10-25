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
    for ($i = 0; $i < 10; $i++) if ($tab[$i] > 1) return false;
    return true;
}
