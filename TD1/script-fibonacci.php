<?php
$n = readline();
$a = 0;
$b = 1;
for ($i = 1; $i < $n; ++$i) {
    $c = $a + $b;
    $a = $b;
    $b = $c;
}
echo ("###$c###");
