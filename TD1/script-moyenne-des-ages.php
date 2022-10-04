<?php
$s = 0;
$n = readline();
while ($n <= 0) {
    $n = readline();
    }
$i = $n;
while ($i > 0) {
    --$i;
    $a = readline();
    while ($a <= 0) {
        $a = readline();
        }
    $s += $a;
    }
$s = $s / $n;
echo ($s);
