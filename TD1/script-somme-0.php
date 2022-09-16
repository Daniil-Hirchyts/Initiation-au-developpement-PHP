<?php
$s = 0;
$i = 0;
$n = readline();
while ($n != 0) {
    if ($n > 0) {
        $s += $n;
        ++$i;
    }
    $n = readline();
}
echo ($i);
echo ($s);