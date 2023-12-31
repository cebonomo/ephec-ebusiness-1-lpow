<?php

function getRandomValue()
{
   switch (rand(0, 2)) {
      case 0:
         return '';
      case 1:
         return 'o';
      case 2:
         return 'x';
   }
}

function generateGrid($size)
{
   $grid = [];
   for ($i = 0; $i < $size; $i++) {
      $grid[$i] = [];
      for ($j = 0; $j < $size; $j++) {
         $grid[$i][$j] = getRandomValue();
      }
   }
   return $grid;
}

$grid = generateGrid(6);

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Morpion</title>
        <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        tr {
            height: 25px;
        }
        td {
            text-align: center;
            width: 25px;
        }
        td.x {
            color: red;
        }
        td.o {
            color: blue;
        }
    </style>
    </head>
    <body>
        <table>
        <?php foreach ($grid as $row) { ?>
            <tr>
                <?php foreach ($row as $cell) { ?>
                    <td class="<?php echo $cell; ?>"><?php echo $cell; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>