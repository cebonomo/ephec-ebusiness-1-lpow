<?php

function calculate($matrix)
{
    $total = 0;
    $sum = 0;
    foreach ($matrix as $row) {
        foreach ($row as $cell) {
            $total++;
            $sum += $cell;
        }
    }

    $average = 0;
    if ($total) {
        $average = $sum / $total;
    }

    return [
        'total' => $total,
        'sum' => $sum,
        'average' => $average,
    ];
}
