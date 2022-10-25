<?php

// fichier fonction-nombre-de-chiffres.php

/**
 * Donnée : un entier
 * Résultat : retourne le nombre de chiffres de l'entier
 */
function nbDeChiffresDe(int $n): int
{
    $nb = 0;
    while ($n > 0) {
        $n = floor($n / 10);
        $nb++;
    }
    return $nb;
}
function nbDeChiffresDuCarréDe(int $n): int
{
    return nbDeChiffresDe($n * $n);
}
