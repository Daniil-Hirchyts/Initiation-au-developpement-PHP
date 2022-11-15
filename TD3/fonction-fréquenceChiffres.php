<?php

// fichier fonction-fréquenceChiffres.php

/**
 * Donnée : un nombre entier
 * Résultat : retourne un tableau de 10 entiers, tel que tab[i] est le nombre de fois où le chiffre i apparaît dans l'écriture de n
 */
function fréquenceChiffres(int $n): array{
    $t = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    while ($n > 0){
        $t[$n % 10]++;
        $n = intdiv($n ,10);
    }
    if ($n == 0) $t[0]++;
    return $t;
}