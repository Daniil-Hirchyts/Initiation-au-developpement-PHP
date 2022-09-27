<?php
    function afficherTabEntiers(array $tab): void
    {
        for ($i = 0; $i < count($tab); $i++) echo $tab[$i] . " ";
    }
