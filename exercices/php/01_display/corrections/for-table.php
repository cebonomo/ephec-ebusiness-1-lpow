<?php

function getRowNumber($rowIndex)
{
    return $rowIndex + 1;
}

function getRowClass($rowIndex)
{
    $rowNumber = getRowNumber($rowIndex);
    if ($rowNumber % 2 == 0) {
        return "even";
    }
    return "odd";
}

function getCellId($rowIndex, $colIndex)
{
    return 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'[$colIndex] . getRowNumber($rowIndex);
}


?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tableau généré dynamiquement</title>
    <style>
        table {
            min-width: 50%;
        }
        table, th, td {
            border: 1px solid black;
        }
        td {
            text-align: center;
        }
        tr.even {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <table>
    <?php
    for ($row = 0; $row < 4; $row++) {
        echo '<tr class="' . getRowClass($row) . '">';
        for ($col = 0; $col < 3; $col++) {
            echo '<td>' . getCellId($row, $col) . '</td>';
        }
        echo '</tr>';
    }
    ?>
    </table>
 
</body>
</html>
