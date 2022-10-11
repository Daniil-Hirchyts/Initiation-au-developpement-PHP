<?php

function nombreDeTriangleRectangleDePérimètreAuPlus(int $n): int{
    $nb = 0;
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            for($k = 1; $k <= $n; $k++){
                if($i + $j + $k <= $n && $i * $i + $j * $j == $k * $k){
                    $nb++;
                }
            }
        }
    }
    return $nb;
}