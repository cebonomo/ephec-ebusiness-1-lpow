<?php

$n = 5;
$result = '(';

for ($i = 1; $i <= $n; $i++) {
    $result .= $i;
    if ($i < $n) {
        $result .= ',';
    }
}

$result .= ')';

echo $result;
