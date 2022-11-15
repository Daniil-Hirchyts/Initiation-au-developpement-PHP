<?php

$c = '';
$l = 0;
do {
    if ($c != ' ') $l++;
    else $l = 0;
    $c = fgetc(STDIN);
} while ($c != '.');
echo("***$l***\n");