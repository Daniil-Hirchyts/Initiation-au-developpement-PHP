<?php
    $annee = readline("Entrez une année : ");
    echo $annee % 4 == 0 && $annee % 100 != 0 || $annee % 400 == 0 ? "année bissextile" : "année non bissextile";
