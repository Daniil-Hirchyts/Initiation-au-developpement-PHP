<?php
$n = 0;
$c = "";
while ($c != ".") {
    $c = fgetc(STDIN);
    if ($c != ' ') ++$n;
    else $n = 0;
    if ($c == '.') $n--;
}
echo "***$n***";
