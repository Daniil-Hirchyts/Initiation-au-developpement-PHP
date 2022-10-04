<?php
    function afficherTabEntiers(array $tab): void
    {
        echo "[";
        for ($i = 0; $i < count($tab); $i++) {
            if ($i == count($tab) - 1) echo $tab[$i]."]";
            else echo $tab[$i] . ",";
        }
    }
