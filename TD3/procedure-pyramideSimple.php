<?php

// fichier procedure-pyramideSimple.php

/**
 * Donnée : un entier et et un caractère
 * Résultat : affichage d'une pyramide de hauteur n
 */
require("procedure-repeteCarac.php");
function pyramideSimple(int $h, string $c): void
{
    for ($i = 0; $i < $h; $i++) {
        repeteCarac($h - $i, " ");
        repeteCarac($i * 2 + 1, $c);
        echo "\n";
    }
}

