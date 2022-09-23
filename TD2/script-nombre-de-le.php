<?php
$c = "";
$n = false;
$m = 0;
while ($c != ".") {
    $c = fgetc(STDIN);
    if ($n) {
        if ($c == "e") $m++;
        $n = false;
    }
    if ($c == 'l') $n = true;
    if ($c == " ") $n = false;
}
echo "***$m***";
