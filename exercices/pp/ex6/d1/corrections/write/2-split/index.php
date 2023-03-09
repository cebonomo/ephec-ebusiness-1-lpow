<?php

$numbers = [
    0, 1, 2, 3, 4, // nombres positifs
    -0, -1, -2, -3, -4, // nombres négatifs
];

$zeros = [];
$positives = [];
$negatives = [];

foreach ($numbers as $number) {

    // positifs
    if ($number > 0) {
        $positives[] = $number;
        continue;
    } 

    // négatifs
    if ($number < 0) {
        $negatives[] = $number;
        continue;
    }

    // zéros
    $zeros[] = $number;
}

var_dump($zeros, $positives, $negatives);
