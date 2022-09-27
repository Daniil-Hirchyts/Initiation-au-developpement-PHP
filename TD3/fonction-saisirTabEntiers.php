<?php
    function saisirTabEntiers(int $taille): array
    {
        $tab = array();
        for ($i = 0; $i < $taille; $i++) {
            $tab[$i] = readline("Entrez un entier: ");
        }
        return $tab;
    }
