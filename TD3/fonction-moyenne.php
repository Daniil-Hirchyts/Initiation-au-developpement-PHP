<?php
    function moyenne(array $tab): float
    {
        for ($i = 0, $somme = 0; $i < count($tab); $i++) $somme += $tab[$i];
        return $somme / count($tab);
    }
