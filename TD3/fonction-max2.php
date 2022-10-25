<?php

// fichier fonction-max2.php

/**
 * Donnée : deux entiers
 * Résultat : retourne le plus grand des deux
 */
function max2(int $a, int $b): int
{
    if ($a > $b) return $a;
    else return $b;
}
