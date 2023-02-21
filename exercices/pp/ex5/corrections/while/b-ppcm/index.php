<?php

$a = 2;
$b = 3;

$am = $a;
$bm = $b;

while ($am != $bm) {
    if ($am < $bm) {
        $am += $a;
    } else {
        $bm += $b;
    }
}

var_dump($am, $bm);
