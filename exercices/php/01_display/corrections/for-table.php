<?php

function getRowClass($rowIndex) {
    if ($rowIndex%2 == 0) {
        return "even";
    }
    return "odd";
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
    for ($row = 1; $row <= 4; $row++) {
        echo '<tr class="' . getRowClass($row) . '">';
        for ($col = 1; $col <= 3; $col++) {
            echo '<td>' . chr(64 + $col) . $row . '</td>';
        }
        echo '</tr>';
    }
    ?>
    </table>
 
</body>
</html>
