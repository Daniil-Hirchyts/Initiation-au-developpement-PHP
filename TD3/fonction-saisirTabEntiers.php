<?php
    function saisirTabEntiers(int $t): array
    {
        $tab = array();
        for ($i = 0; $i < $t; $i++) {
            $tab[$i] = readline("Entrez un entier : ");
        }
        return $tab;
    }
