<?php

// fichier fonction-nombreDeTriangleRectangleDePérimètreAuPlus.php

/**
 * Donnée : un entier
 * Résultat : retourne le nombre de triangles rectangles dont le périmètre est au plus n
 */
function nombreDeTrianglesRectanglesDePérimètreAuPlus(int $n): int
{
    $nb = 0;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            for ($k = 1; $k <= $n; $k++) {
                if ($i + $j + $k <= $n && $i * $i + $j * $j == $k * $k) {
                    $nb++;
                }
            }
        }
    }
    return $nb;
}
