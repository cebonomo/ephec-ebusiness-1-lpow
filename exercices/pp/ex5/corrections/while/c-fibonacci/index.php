<?php

$n = 34;

$a = 0;
$b = 1;

while ($a <= $n) {
    $current = $a;
    $a = $b;
    $b = $current + $a;
    
    var_dump($current);
}
