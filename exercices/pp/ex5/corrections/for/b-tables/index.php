<?php

$number = 7;

echo 'Table de ' . $number . '<br>';

for ($i = 0; $i <= 10; $i++) {
    $x = $i * $number;
    echo "$i * $number = $x";
    echo '<br>';
}

