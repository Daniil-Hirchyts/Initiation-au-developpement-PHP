<?php
require ("fonction-estPalindrome.php");
$tab = array();
$nbr = readline("Entrez un nombre entier : ");
for ($i = 0; $i < $nbr; $i++){
    $tab[$i] = readline("Entrez un caractère : ");
}
if (estPalindrome($tab)) echo "Le tableau est un palindrome";
else echo "Le tableau n'est pas un palindrome";