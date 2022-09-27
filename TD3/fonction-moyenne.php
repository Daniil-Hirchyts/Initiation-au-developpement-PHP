<?php
    function moyenne(array $tab): int
    {
        $somme = 0;
        for ($i = 0; $i < count($tab); $i++) {
            $somme += $tab[$i];
        }
        return $somme / count($tab);
    }
