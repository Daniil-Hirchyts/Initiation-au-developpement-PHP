<?php

// fichier procedure-repeteCarac.php

/**
 * Donnée : un entier positif et un caractère
 * Résultat : affichage de n fois le caractère
 */
function repeteCarac(int $nb, string $car): void
{
    for ($i = 0; $i < $nb; $i++) echo $car;
}
