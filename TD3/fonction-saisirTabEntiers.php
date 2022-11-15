<?php

// fichier fonction-saisirTabEntiers.php

/**
 * Donnée : un entier n positif non nul
 * Résultat : retourne un tableau de n entiers saisis au clavier
 */
function saisirTabEntiers(int $t): array
{
    $tab = array();
    for ($i = 0; $i < $t; $i++) {
        $tab[$i] = readline("Entrez un entier : ");
    }
    return $tab;
}

