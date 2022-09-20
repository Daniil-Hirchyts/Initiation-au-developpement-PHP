<?php
$n = 0;
$m = 0;
$c = "";
while ($c != ".") {
    $c = fgetc(STDIN);
    ++$n;
    if ($m < $n) ++$m;
    if ($c == ' ') $n = 0;
}
--$m;
echo "###$m###";