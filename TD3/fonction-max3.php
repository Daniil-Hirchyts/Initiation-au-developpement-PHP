<?php
require ("fonction-max2.php");

function max3(int $a,int $b,int $c): int {
    return max2(max2($a, $b), $c);
}

