<?php

// fichier fonction-moyenne.php

/**
 * Donnée : un tableau de réels non vide
 * Résultat : retourne la moyenne des éléments du tableau
 */
function moyenne(array $tab): float
{
    for ($i = 0, $somme = 0; $i < count($tab); $i++) $somme += $tab[$i];
    return $somme / count($tab);
}
